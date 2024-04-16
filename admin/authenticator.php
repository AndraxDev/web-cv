<?php

$ivBytes = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
$ivString = implode(array_map("chr", $ivBytes));

function encrypt($aesKey, $dataToEncrypt, $ivString) {
    $output = false;
    $iv = $ivString;
    $output = openssl_encrypt($dataToEncrypt, 'AES-256-CBC', $aesKey,
    OPENSSL_RAW_DATA, $iv);
    $output = base64_encode($output);
    return $output;
}

function decrypt($aesKey, $dataTodecrypt, $ivString) {
    $output = false;
    $iv = $ivString;
    $dataTodecrypt = base64_decode($dataTodecrypt);
    $dataTodecrypt = $output = openssl_decrypt($dataTodecrypt, 'AES-256-CBC',
    $aesKey, OPENSSL_RAW_DATA, $iv);
    return $output;
}

$username = $_GET['username'];
$password = $_GET['password']; // Password hash

$database = file_get_contents($username.".tf");

if ($database != "") {
    $database_decrypted = decrypt($password, $database, $ivString);
    
    if ($database_decrypted != "") {
        $database_decoded = json_decode($database_decrypted);

        if ($database_decoded->{'username'} == $username) {
            if ($database_decoded->{'password'} == $password) {
                require_once 'jwt_rs384.php';
                $headers = array('alg'=>'RS384','typ'=>'JWT');
                $payload = array('username'=>$_GET['username'], 'exp'=>(time() + 60 * 60 * 24 * 7));
                $jwt = generate_jwt($headers, $payload);
                echo('{"code": 200, "message": "'.$jwt.'"}');
            } else {
                echo('{"code": 403, "message": "Invalid password!"}');
            }
        } else {
            echo('{"code": 403, "message": "User not found!"}');
        }
    } else {
        echo('{"code": 403, "message": "Invalid password!"}');
    }
} else {
    echo('{"code": 403, "message": "User not found!"}');
}

?>