<?php
    session_start();
    //print_r($_SESSION);

    if(empty($_SESSION['usuario']))
    {
        echo "se detecto un intento de acceso invalido";
        ?>
        <a href="index.php">presione aqui para regresar</a>
        <?php
        exit();
    }
$servername = "localhost";
$username = "id17616884_root";
$password = "k29Mk1>D2kg2ob4[";
$dbname = "id17616884_pos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//print_r($_POST);
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$sql = "UPDATE productos SET nombre='$nombre', precio='$precio' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  header("location: conectar.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  ?>
  <a href="conectar.php">presione aqui para regresar</a>
  <?php
}

$conn->close();
?>