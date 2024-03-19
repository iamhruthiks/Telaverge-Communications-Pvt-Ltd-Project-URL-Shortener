<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "url_shortener_db";

if(!$con = mysqli_connect($host,$user,$pass,$db,3307))
{
    die("failed to connect to url_shortner_db");
}