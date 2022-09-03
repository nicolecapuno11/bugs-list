<?php 
    include "vendor/autoload.php";
    use GuzzleHttp\Client;
    use GuzzleHttp\Psr7\Request;
    
    define('TOKEN', 'blq7NrJG3_ct5a02Q09IhrusXEy3ttTM');
    define('MANTISHUB_URL', 'https://ipt10-2022.mantishub.io/');
    
    $client = new Client();
    $headers = [
      'Authorization' => TOKEN
    ];
    $request = new Request('GET', MANTISHUB_URL.'api/rest/issues?page_size=10&page=1', $headers);
    $res = $client->sendAsync($request)->wait();
    $bugs = $res->getBody()->getContents();
    $bugs_list = json_decode($bugs);

?>

<!DOCTYPE html>
<html>
<head>
<title>IPT10 BUGS LIST</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style> 
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>
<h1>IPT10 BUGS LIST</h1>
<a href="url">NICOLE FRANKIE D. CAPUNO</a>

<table style="width:50%">
  <tr>
    <th>ID</th>
    <th>Summary</th>
    <th>Severity</th>
    <th>Status</th>
  </tr>

<?php
  foreach ($bugs_list->issues as $bug)
    {
        ?>
 <tr>
    <td><?php echo $bug->id; ?></td>
    <td><?php echo $bug->summary; ?></td>
    <td><?php echo $bug->severity->name; ?></td>
    <td><?php echo $bug->status->name; ?></td>
  </tr>
  <?php
    }
    ?>
</table>
</body>
</html>