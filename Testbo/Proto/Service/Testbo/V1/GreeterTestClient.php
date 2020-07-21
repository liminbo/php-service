<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Service\Testbo\V1;

/**
 */
class GreeterTestClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Service\Testbo\V1\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Hello(\Service\Testbo\V1\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/GreeterTest/Hello',
        $argument,
        ['\Service\Testbo\V1\Response', 'decode'],
        $metadata, $options);
    }

}
