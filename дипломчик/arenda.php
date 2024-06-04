<!DOCTYPE html>
<html lang="en">
<head>

</style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Аренда</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
</head>
<body style="font-size: 24px;  margin-top: 2%;">



<?php



$mysql_host = "localhost";
$username = "samdarpc";
$password = "";
$dbname = "diplom";



$connect = new mysqli($mysql_host, $username, $password, $dbname) or die("Unable to connect");
echo" " ;

if ($connect->connect_error) {

die("Connection failed: ".$connect->connect_error); }

$result=mysqli_query($connect, "SELECT * FROM `arenda`" ) ; 
 $sql = "SELECT ID, имя, пол,порода,возраст,цена FROM arenda";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
  // Выводим данные каждой строки
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["ID"]. " - Порода: " . $row["порода"]. " - Пол: " . $row["пол"] . " - Возраст: ". $row ["возраст"]. " - Имя:" . $row["имя"] . " - Цена за сутки:" . $row["цена"] . "<br>" . "<br>";
  }
} else {
  echo "ошибка";
}
$connect->close();
 
?>
 <a style=" font-size: 30px;" href="arenda.html" class="button top-3">Назад</a>
       
        <?php   ?> 
     



</body>
</html>