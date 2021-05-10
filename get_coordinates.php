        <?php
        include 'connection.php';
        $obj1=new MyClass1();
        $conn = $obj1->OpenCon();
        $arr=array();
        
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $ql = $conn->prepare("select latitude,longitude from location");
      if($ql->execute())
      {
        while($res = $ql->fetch()){
                array_push($arr, $res);
        }

}
echo json_encode($arr);          
$obj1->CloseCon($conn);
        ?>