<?php

require_once 'jwt_rs384.php';
$jwt = $_GET['token'];

if (is_jwt_valid($jwt) == TRUE) {
    echo('{"code": 200, "message": "OK"}');
} else {
    echo('{"code": 403, "message": "Invalid token"}');
}

?>