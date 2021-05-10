<?php
include 'connection.php';

$obj1=new MyClass1();
$conn = $obj1->OpenCon();
try
        {
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST['submit']))
{
    $code = $_POST["productcode"];
    $cat = $_POST["category"];
    $price = $_POST["price"];
    $file = file_get_contents($_FILES["image"]["tmp_name"]);

    $query = $conn->prepare("INSERT INTO `products`(`product_code`, `category`, `price`, `image`) VALUES (?, ?, ?, ?)");
    $query->bindParam(1, $code);
    $query->bindParam(2, $cat);
    $query->bindParam(3, $price);
    $query->bindParam(4, $file);
    $query->execute();
    
}
        }
        catch (PDOException $e){
            echo "Error: ".$e->getMessage();
        } 
$obj1->CloseCon($conn);
header('location:product-show.php');
?>