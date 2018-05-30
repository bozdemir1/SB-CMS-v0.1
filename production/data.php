<?php
//setting header to json
header('Content-Type:application/json');

try {
    $db = new PDO("mysql:host=localhost;dbname=burakdevecioglu",'root','12345');
    $db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
    //echo "Veritabanı bağlantısı başarılı";
}
catch (PDOExpception $e){
    echo $e->getMessage();
}

 $verisor=$db->prepare("SELECT * FROM etkinlikler ORDER BY etkinlikler_id");
$verisor->execute();

$data = array();
foreach ($verisor as $row){
    $data[] = $row;
}
$db=null;

print json_encode($data);
?>
