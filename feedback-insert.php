<?php
include 'connection.php';

$obj1=new MyClass1();
$conn = $obj1->OpenCon();
try
{
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST['submit']))
{
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $country = $_POST["country"];
    $feedback = $_POST["feedback"];
    
    $query = $conn->prepare("INSERT INTO `feedback`(`firstname`, `lastname`, `email`, `country`, `feedback`) VALUES (?, ?, ?, ?, ?)");
    $query->bindParam(1, $firstname);
    $query->bindParam(2, $lastname);
    $query->bindParam(3, $email);
    $query->bindParam(4, $country);
    $query->bindParam(5, $feedback);
    $query->execute();
    
}
        }
        catch (PDOException $e){
            echo "Error: ".$e->getMessage();
        } 
$obj1->CloseCon($conn);
header('location:index.php');
?>