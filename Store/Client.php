<?php

namespace Service\Store;

use Service\Libs\Registry;
use Store\Grpc\StoreServiceClient;
use Store\Grpc\StoreDetailReq;
use Grpc;

class Client{

    const SERVICE_NAME = 'go.micro.srv.store';
    const REGISTRY_KEY = "/micro/registry/". self::SERVICE_NAME ."/". self::SERVICE_NAME;

    private $_Registry = null;

    public function __construct($option)
    {
        $this->_Registry = new Registry($option['registry_address']);
    }

    public function OfflineStoreDetail($storeId){
        $address = $this->_Registry->getServiceAddress(self::REGISTRY_KEY);
        $client = new StoreServiceClient($address,
            [
                'credentials' => Grpc\ChannelCredentials::createInsecure(),
            ]);

        $request = new StoreDetailReq();
        $request->setStoreId($storeId);

        list($rep, $status) = $client->OfflineStoreDetail($request)->wait();
        if (empty($status->code)){
            return $rep->getOfflineStore();
        }
        return array();
    }

    public function FuzzyStore($keyword){
        $client = new StoreServiceClient("192.168.1.48:9100",
            [
                'credentials' => Grpc\ChannelCredentials::createInsecure(),
            ]);
    }

}