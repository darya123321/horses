<!DOCTYPE html>
<html lang="en">
<head>

</style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Продажа</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
</head>
<body style="font-size: 24px; text-align: justify;  margin-top: 2%;">



<?php



$mysql_host = "localhost";
$username = "samdarpc";
$password = "";
$dbname = "diplom";



$connect = new mysqli($mysql_host, $username, $password, $dbname) or die("Unable to connect");
echo" " ;

if ($connect->connect_error) {

die("Connection failed: ".$connect->connect_error); }

$result=mysqli_query($connect, "SELECT * FROM `prodaga`" ) ; 
 $sql = "SELECT ID, имя, пол,порода,возраст,цена FROM prodaga";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
  // Выводим данные каждой строки
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["ID"]. " - Порода: " . $row["порода"]. " - Пол: " . $row["пол"] . " - Возраст: ". $row ["возраст"]. " - Имя:" . $row["имя"] . " - Цена:" . $row["цена"] . "<br>" . "<br>";
  }
} else {
  echo "ошибка";
}
$connect->close();
 
?>
 <a style=" font-size: 30px;" href="prodaga.html" class="button top-3">Назад</a>
       
        <?php   ?> 
     



</body>
</html>