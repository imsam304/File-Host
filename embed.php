<?php

if(!empty($_GET['id'])) {
$get = $_GET['id'];

$uri = base64_decode('aHR0cHM6Ly9kbC5zaGFraWIuY3lvdS9zdHJlYW0v');

echo file_get_contents($uri.$get);

} else {
header('location: /');
}


?>
