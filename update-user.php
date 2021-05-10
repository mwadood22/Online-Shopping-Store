<?php
include 'connection.php';
session_start();
$obj1=new MyClass1();
$conn = $obj1->OpenCon();
try
        {
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST['update']))
{
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"]; 
    $password = $_POST["password"];
    $id = $_SESSION["id"];

    $query = $conn->prepare("UPDATE `user` SET `name` = ?, `age` = ?, `email` = ?, `password` = ? WHERE `userid` = ?");
    $query->bindParam(1, $name);
    $query->bindParam(2, $age);
    $query->bindParam(3, $email);
    $query->bindParam(4, $password);
    $query->bindParam(5, $id);
    
    $query->execute();
    $_SESSION['user'] = $_POST['name'];
}
        }
        catch (PDOException $e){
            echo "Error: ".$e->getMessage();
        } 
$obj1->CloseCon($conn);
header('location:user_info.php');
?>