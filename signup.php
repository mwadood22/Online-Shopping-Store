<?php
include 'connection.php';


$obj1=new MyClass1();
$conn = $obj1->OpenCon();
try
        {
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST['submit']))
{
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"]; 
    $password = $_POST["password"];
    
    
    $query = $conn->prepare("INSERT INTO `user`( `name`, `age`, `email`, `password`) VALUES ( ?, ?, ?, ?)");
    $query->bindParam(1, $name);
    $query->bindParam(2, $age);
    $query->bindParam(3, $email);
    $query->bindParam(4, $password);
    
    $query->execute();

}
        }
        catch (PDOException $e){
            echo "Error: ".$e->getMessage();
        }
$obj1->CloseCon($conn);
header('location:index.php');

?>