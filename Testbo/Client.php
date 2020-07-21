<?php

namespace Service\Testbo;

use Grpc;
use Service\Store\V1\GreeterClient;
use Service\Store\V1;
use Service\Testbo\V1\GreeterTestClient;

class Client{

    public function test(){
        $client = new GreeterClient("192.168.1.48:9100",
            [
                'credentials' => Grpc\ChannelCredentials::createInsecure(),
            ]);
        var_dump($client);

        $request = new V1\Request();
        $request->setName("bo");
//
        list($rep, $status) = $client->Hello($request)->wait();
        var_dump($rep->getGreeting());
        echo "dfsfwefwef";
    }

}