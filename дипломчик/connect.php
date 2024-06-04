<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
</head>
<body style="font-size: 24px;  margin-top: 17%; text-align: center;">
<?php 


$named = $_POST['name'];
$email = $_POST['email'];
$numb = $_POST['numb'];
$datatime= $_POST['datatime'];
$naprav= $_POST['naprav'];
$textarea = $_POST['text'];

$mysql_host = "localhost";
$username = "samdarpc";
$password = "";
$dbname = "diplom";



$connect = new mysqli($mysql_host, $username, $password, $dbname) or die("Unable to connect");
echo"Готово. " ;

if ($connect->connect_error) {

die("Connection failed: ".$connect->connect_error); }

$sql = "INSERT INTO zapisi (name,email,numb,datatime,naprav,text)
VALUES ('$named', '$email', '$numb', '$datatime', '$naprav', '$textarea')";

if ($connect->query($sql) === TRUE) { 

echo  "Вы успешно записаны!<br> Мы обязательно с вами свяжемся!";

} else {

echo "Error: ". $sql . "<br>" . $connect->error;}
$connect->close();

?>
</body>
</html>