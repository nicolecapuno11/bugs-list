<?php
$client = new Client();
$headers = [
  'Authorization' => TOKEN
  'Content-Type' => 'application/json'
];
$body = '{
  "text": "capuno.nicolefrankie@auf.edu.ph",
  "view_state": {
    "name": "public"
  }
}';
$request = new Request('POST', MANTISHUB_URL.'api/rest/issues/1234/notes', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();