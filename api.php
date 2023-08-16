<?php

//fetch json data  
ini_set("allow_url_fopen", 1);
$url = 'https://api.adgatemedia.com/v3/offers/?aff=48864&api_key=155efa664a706f295fb446570041d707&wall_code=o6qb';
$json = file_get_contents($url);
$jo = json_decode($json);

//encryption settings
function encrypt($data) {

$ciphering_value = "AES-128-CTR";  
$encryption_key = "JavaTpoint";  
return $encryption_value = openssl_encrypt($data, $ciphering_value, $encryption_key);
}

//PDO settings
$host = "localhost";
$dbname = "testProject";
$user = "root";
$pass = "root";

$pdo = new PDO("mysql:host=" . $host . ";dbname=" . $dbname, $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('SET NAMES "utf8"');

foreach ($jo->data as $data) {

    $id = $data->id; 
    $name = encrypt($data->name); 
    $requirements = encrypt($data->requirements); 
    $description = encrypt($data->description); 
    $epc = encrypt($data->epc); 
    $click_url = encrypt($data->click_url); 

    try {

        $sql = "INSERT INTO articles (id, name, requirements, description, ecpc, click_url) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id, $name, $requirements, $description, $epc, $click_url]);
      

    } catch (PDOException $e) {

        echo $e;
        exit();
    }
}

echo "Inserted";
