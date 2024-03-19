<?php 
   
    $domain = "localhost/url/"; 
    $host = "localhost";
    $user = "root"; 
    $pass = ""; 
    $db = "url_shortener_db"; 

    $conn = mysqli_connect($host, $user, $pass, $db,3307);
    if(!$conn){
        die("failed to connect to url_shortner_db");
    }
?>