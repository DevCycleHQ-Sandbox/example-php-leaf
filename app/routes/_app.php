<?php


use DevCycle\Api\DevCycleClient;
use DevCycle\Model\DevCycleOptions;
use DevCycle\Model\DevCycleUser;

app()->get('/', function () {

    $options = new DevCycleOptions();

    $devcycle_client = new DevCycleClient(
        sdkKey: _env('DEVCYCLE_SERVER_SDK_KEY'),
        dvcOptions: $options
    );

    $user_data = new DevCycleUser(array(
        "user_id" => "my-user"
    ));

    render('index', ['devcycle_client' => $devcycle_client, 'user_data' => $user_data]);
});
