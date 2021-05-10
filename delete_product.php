<?php
include 'connection.php';
$obj1=new MyClass1();
$conn = $obj1->OpenCon();


    $id = $_GET['product_code'];
    try
      {
    $ql = $conn->prepare("DELETE from products where product_code = $id");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $ql->execute();
      }
      catch (PDOException $e){
        echo "Error: ".$e->getMessage();
    }   
    
    $obj1->CloseCon($conn);
    header('location:product-show.php');
?>
