<?php

    require __DIR__ . '/vendor/autoload.php';


    $client = new Acelle\Client(
            'http://acelle.local/api/v1',
            'aIpfXqiFMnsvO0e9nlpACZ4x0euvngGTKADSnjKy1760uY5vZ9strUX0f9RW'
        );

    var_dump($client->subscriber()->update('5fa8a9429f72d', ['ddd' => 'fff']));