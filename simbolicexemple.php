<?php  

$tagetFolder = $_SERVER['DOCUMENT_ROOT']. '/storage/app/public';

$linkFolder = $_SERVER['DOCUMENT_ROOT']. '/public/storage';

symlink($tagetFolder, $linkFolder);

echo 'Success';


?>