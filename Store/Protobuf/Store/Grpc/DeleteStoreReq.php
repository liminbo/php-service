<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: request.proto

namespace Store\Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>go.micro.srv.store.v1.DeleteStoreReq</code>
 */
class DeleteStoreReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 store_id = 1;</code>
     */
    protected $store_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $store_id
     * }
     */
    public function __construct($data = NULL) {
        \Store\Grpc\GPBMetadata\Request::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 store_id = 1;</code>
     * @return int
     */
    public function getStoreId()
    {
        return $this->store_id;
    }

    /**
     * Generated from protobuf field <code>int32 store_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStoreId($var)
    {
        GPBUtil::checkInt32($var);
        $this->store_id = $var;

        return $this;
    }

}

