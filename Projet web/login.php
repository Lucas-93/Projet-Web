<?php

$host = "127.0.0.1";
$user="root";
$password="";
$db="projetweb";


//$con =
mysqli_connect($host, $user, $password, $db);
//mysqli_select_db($db);

if(isset($_POST['mail'])){
    $mail=$_POST['mail'];
    $password=$_POST['password'];
    $sql="select Mail and Pass from client where Mail='".$mail."' AND Pass='".$password."' limit 1 ";

    $result=mysql_query($sql);
if(mysql_num_rows($result)==1){
    echo"Connexion réuissie";
    exit();
}
else{
    echo"Email ou mot de passe invalides";
    exit();
}
}
?>