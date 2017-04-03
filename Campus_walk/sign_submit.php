<?php 
require_once('config.php');

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST['name'];
    $college = $_POST['college'];
    $grade = $_POST['grade'];
    $telphone = $_POST['telphone'];
    $email = $_POST['email'];
}

$DB_NAME = 'SUMSC';
$TB_NAME = 'Campus_walk';
$DB = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, $DB_NAME);

if($DB->connect_error)
    die('Connect to mysql failed.<br>');

$sql = "insert into $TB_NAME (name, college, grade, telphone, email) values ('$name', '$college', '$grade', '$telphone', '$email');";

$result = $DB->query($sql);
if( $result <= 0 )
    die("Insert into table $TB_NAME failed.<br>");
else header("location:sign_up.php?status=1");
?>
