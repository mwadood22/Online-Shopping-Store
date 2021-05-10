<?php
if(isset($_POST["id"]))
{
include 'connection.php';


$obj1=new MyClass1();
$conn = $obj1->OpenCon();
$output = '<div class= "card m-auto" style="width: 18rem;">';

try
{
 $query=$conn->prepare("SELECT * FROM products WHERE product_code = '".$_POST["id"]."'");
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 if($query->execute())
                {
    while($row = $query->fetch())
    {
      $output .= '
      <img class="card-img-top" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" style = "height: 350px;"/>
      <div class="card-body text-white" style="background-color: rgb(37, 36, 36)">
      <p class="card-text">Rs: '.$row['price'].'/-</p>  
      </div>          
   ';
 }
 }
 $output .='</div>' ;
 echo $output;
}
catch (PDOException $e){
  echo "Error: ".$e->getMessage();
}  
}
$obj1->CloseCon($conn);

?>