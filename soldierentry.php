<?php


    $unm = $_POST['uname'];
    $p = $_POST['pass'];
    $ml = $_POST['email'];
    $mobno = $_POST['mob'];
    $adno = $_POST['adhaar'];
    $benname = $_POST['bname'];
    $acno = $_POST['acc'];
	$bkname = $_POST['bank'];
    $ifsccode = $_POST['ifsc'];
    $idno = $_POST['id'];
	$amt=0;
	$sold_name = $_POST['sname'];
	
    try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=project','root','root');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="insert into soldier (uname,pass,email,mob,adhaar,sold_name,id,bname,acc,bank,ifsc,amount) values ('$unm','$p','$ml','$mobno','$adno','$sold_name','$idno','$benname','$acno','$bkname','$ifsccode','$amt')";
	$query=$dbhandler->query($sql);
	
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}
 echo"Registered";
?>
<html>
<script>
window.alert("You are Registered");
window.location.href="login.php";
</script>
</html>
