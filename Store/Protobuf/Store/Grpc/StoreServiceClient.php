<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// protobuf 文件参考:
//  - https://developers.google.com/protocol-buffers/
namespace Store\Grpc;

/**
 */
class StoreServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 线下门店列表
     * @param \Store\Grpc\StoreListReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function StoreList(\Store\Grpc\StoreListReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/go.micro.srv.store.v1.StoreService/StoreList',
        $argument,
        ['\Store\Grpc\StoreListRep', 'decode'],
        $metadata, $options);
    }

    /**
     * 线下门店详情
     * @param \Store\Grpc\StoreDetailReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function OfflineStoreDetail(\Store\Grpc\StoreDetailReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/go.micro.srv.store.v1.StoreService/OfflineStoreDetail',
        $argument,
        ['\Store\Grpc\OfflineStoreDetailRep', 'decode'],
        $metadata, $options);
    }

    /**
     * 线下门店详情
     * @param \Store\Grpc\StoreDetailReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function OnlineStoreDetail(\Store\Grpc\StoreDetailReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/go.micro.srv.store.v1.StoreService/OnlineStoreDetail',
        $argument,
        ['\Store\Grpc\OnlineStoreDetailRep', 'decode'],
        $metadata, $options);
    }

    /**
     * 全文检索门店
     * @param \Store\Grpc\FuzzySearchStoreReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function FuzzySearchStore(\Store\Grpc\FuzzySearchStoreReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/go.micro.srv.store.v1.StoreService/FuzzySearchStore',
        $argument,
        ['\Store\Grpc\FuzzySearchStoreRep', 'decode'],
        $metadata, $options);
    }

    /**
     * 增加门店
     * @param \Store\Grpc\EditStoreReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AddStore(\Store\Grpc\EditStoreReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/go.micro.srv.store.v1.StoreService/AddStore',
        $argument,
        ['\Store\Grpc\AddStoreRep', 'decode'],
        $metadata, $options);
    }

    /**
     * 编辑门店
     * @param \Store\Grpc\EditStoreReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function EditStore(\Store\Grpc\EditStoreReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/go.micro.srv.store.v1.StoreService/EditStore',
        $argument,
        ['\Store\Grpc\EditStoreRep', 'decode'],
        $metadata, $options);
    }

    /**
     * 删除门店
     * @param \Store\Grpc\DeleteStoreReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteStore(\Store\Grpc\DeleteStoreReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/go.micro.srv.store.v1.StoreService/DeleteStore',
        $argument,
        ['\Store\Grpc\DeleteStoreRep', 'decode'],
        $metadata, $options);
    }

    /**
     * 门店图片列表
     * @param \Store\Grpc\StoreDetailReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function StoreImageList(\Store\Grpc\StoreDetailReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/go.micro.srv.store.v1.StoreService/StoreImageList',
        $argument,
        ['\Store\Grpc\StoreImageListRep', 'decode'],
        $metadata, $options);
    }

    /**
     * 门店视频列表
     * @param \Store\Grpc\StoreDetailReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function StoreVideoList(\Store\Grpc\StoreDetailReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/go.micro.srv.store.v1.StoreService/StoreVideoList',
        $argument,
        ['\Store\Grpc\StoreVideoListRep', 'decode'],
        $metadata, $options);
    }

}
