
 <?php

 require('datab.php');
 session_start();
 $conn = mysqli_connect($servername,$username,$password, $dbname);

 if($conn){
   echo "connection was successful";
 }
 else{
   echo "failed";
 }

 if(isset($_POST['amt']) && isset($_POST['name'])){
     $amt=$_POST['amt'];
     $name=$_POST['name'];
     $payment_status="complete";
       $time=date('Y-m-d h:m:s');
     $sql = "INSERT INTO 'payments' ('name', 'amount','payment_status','time')
     VALUES ('$name','$amt','$payment_status','$time')";
     if(mysqli_query($conn,$sql)){
       echo "payment details inserted";
     }
     $_SESSION['OID']=mysqli_insert_id($conn);
 }


 if(isset($_POST['payment_id']) && isset($_SESSION['OID'])){
     $payment_id=$_POST['payment_id'];
     mysqli_query($conn,"update payment set payment_status='complete',payment_id='$payment_id'
     where id='".$_SESSION['OID']."'");
 }
 ?>
