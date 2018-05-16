<?php
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_PORT => "9000",
    CURLOPT_URL => "http://thingplugtest.sktiot.com:9000/0000000000000004/v1_0/remoteCSE-00000004702c1ffffe1d15c4/container-LoRa/latest",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_POSTFIELDS => "{\n    \"nod\": \n    {\n        \"ni\":\"12345678901234567890sjw4\",\n        \"mga\" :\"MQTT|12345678901234567890sjw4\"\n    }\n}",
    CURLOPT_HTTPHEADER => array(
        "Accept: application/xml",
        "Cache-Control: no-cache",
        "Postman-Token: 94285c7e-9661-4853-af88-1a9e4feefcd8",
        "X-M2M-Origin: Origin",
        "X-M2M-RI: 1234",
        "uKey: cEdkZTdtWlRFM2ZMT24xWFVIQ0F2TkRjeFE0VFYyMjdGTXpMcG5aSWVLQUZGNWlzYi9DY01oakVpamRISWNNaQ=="
    ),
    ));
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
    if ($err) {
    echo "cURL Error #:" . $err;
    } else {
    echo $response;
}