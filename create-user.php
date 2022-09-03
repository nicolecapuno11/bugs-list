<?php
$client = new Client();
$headers = [
  'Authorization' => TOKEN
  'Content-Type' => 'application/json'
];
$body = '{
  "username": "nicolefrankie",
  "password": "nicolefrankie",
  "real_name": "Nicole Frankie D. Capuno",
  "email": "capuno.nicolefrankie@auf.edu.ph",
  "access_level": {
    "name": "updater"
  },
  "enabled": false,
  "protected": false
}';
$request = new Request('POST', MANTISHUB_URL.'api/rest/users/me', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();
