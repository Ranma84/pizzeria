<?php
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['precio'];

$cnx = mysqli_connect('localhost', 'root', '', 'biblioteca');
$sql = "UPDATE products set name='$name', price='$price' where id like $id ";
$rta = mysqli_query($cnx, $sql);

if(!$rta){
    echo "No se actualizó el producto";
}
else{
    header("Location: productos.php");
}
?>