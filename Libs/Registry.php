<?php

namespace Service\Libs;
use Etcd\Client;
use Exception;

class Registry{

    private $_registryAddress = null;

    public function __construct($registryAddress)
    {
        $this->_registryAddress = $registryAddress;
    }

    /**
     * 进一步封装获取服务地址
     * @param $key
     * @return mixed
     * @throws Exception
     */
    public function getServiceAddress($key){
        static $address = array();

        if (isset($address[$key])){
            $addressList = $address[$key];
        }else{
            $addressList = $this->_getServiceAddress($key);
            if (empty($addressList)){
                throw new Exception("{$key} no available address");
            }
            $address[$key] = $addressList;
        }

        shuffle($addressList);
        return array_shift($addressList);
    }

    /**
     * 根据服务名到注册中心获取服务地址
     * @param $key
     * @return array
     */
    private function _getServiceAddress($key){
        // 服务地址
        $address_list = array();

        // 到服务中心获取服务地址
        foreach ($this->_getRegistryAddress() as $registryAddrss){
            $RegistryException = null;
            // 允许尝试链接多个地址不抛异常
            try{
                $EtcdClient = new Client($registryAddrss, "v3");
                $data = $EtcdClient->getKeysWithPrefix($key);
                if ($data['count'] > 0){
                    $kvs = $data['kvs'];
                    break;
                }
            }catch(Exception $e){
                $RegistryException = $e;
            }
        }

        if (!empty($RegistryException)){
            throw $RegistryException;
        }

        if (empty($kvs)){
            return $address_list;
        }

        // 格式化数据
        foreach ($kvs as $val){
            $nodes = json_decode($val['value'], true);
            $address = array_map(function ($v){
                return $v['address'];
            }, $nodes['nodes']);
            $address_list = array_merge($address_list, $address);
        }

        return $address_list;
    }

    /**
     * 获取注册中心地址
     * @return array
     */
    private function _getRegistryAddress(){
//        $address = [
//            "127.0.0.1:2379",
//        ];
        return $this->_registryAddress;
    }

}
