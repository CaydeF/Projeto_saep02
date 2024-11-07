<?php
    $host = 'localhost'
    $dbname = 'saep02'
    $username = 'root'
    $password = ''

    $conn = new mysqli ($host,$dbname,$username,$password)

    if($conn -> connect_error)
    {
        die('conexão falhou, sinto muito.')
    }
?>