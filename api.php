<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	
</head>
<body>

<?php

// API endpoint URL
$url = 'https://www.services.bis.gov.in/php/BIS_2.0/dgdashboard/Standards_master/get_academic_dashboard_banner_scroll_items';

// Data to be sent in the POST request
$data = array(
    'Instemailid' => 'sumit.jha@nsut.ac.in',
    'Loginid' => 'bisscmd',
    'Loginpwd' => 'SNr@12#$%&!Rk'
);

// Initialize cURL session
$ch = curl_init($url);

// Set cURL options
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL session and fetch response
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Output the response

/*echo "<pre>";
print_r(json_decode($response));
echo "</pre>";
*/


$data = json_decode($response, true);


echo "<table class='table table-striped'>";
?>
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">URL</th>
      <th scope="col">Created at</th>
    </tr>
  </thead>
<?php 
foreach ($data['banner_scroll_data'] as $item) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($item['id']) . '</td>';
        echo '<td>' . htmlspecialchars($item['title']) . '</td>';
        echo '<td>' . htmlspecialchars($item['description']) . '</td>';
        echo '<td>' . htmlspecialchars($item['url']) . '</td>';
        echo '<td>' . htmlspecialchars($item['created_at']) . '</td>';
        echo '</tr>';
    }

echo "</table>";

?>


</body>
</html>

