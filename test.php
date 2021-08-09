<?php

    use Wagaia\Filigrane\Helper;

    require_once(__DIR__.'/vendor/autoload.php');

    /*$api = new Acelle\Client(
        NEWSLETTER_API_ENDPOINT,
        NEWSLETTER_API_TOKEN
    );*/

    echo $file = ABSPATH.'api/test.txt';

    $array = explode("|", file_get_contents($file));
    dump($array);


    /*$subscribers = $db->select("SELECT * FROM wagaia_candidate c RIGHT JOIN wagaia_candidate_email ce ON ce.candidate_id = c.id");
    echo 'Nb: '.count($subscribers).'<br />';

    $filename = 'test.txt';
    Helper::createFile($subscribers, $filename);

    $response = $api->subscriber()->subscribeAll([
        'list_uid' => '6110e6cca2af2',
        'url' => HTTP.'api/'.$filename,
        'filename' => $filename
    ]);

    dump($response);*/