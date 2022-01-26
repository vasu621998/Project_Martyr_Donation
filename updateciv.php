<?php
session_start();
	$u=$_SESSION['uname'];

	$p = $_POST['pass'];
    $ml = $_POST['email'];
    $mobno = $_POST['mob'];
    $acno = $_POST[ 'acc'];
	$bkname = $_POST['bank'];
  	
    try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=project','root','root');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="update civilian set pass='$p',email='$ml',mob='$mobno',acc='$acno',bank='$bkname' where uname='$u'";
	$query=$dbhandler->query($sql);
	
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}
 
?>
<html>
<script>
window.alert("Successfully Updated");
window.location.href="profileciv.php";
</script>
    <style>
         body
    {
        background-image:url(flag2.jpg);
        background-size: cover;
    }
    </style>
</html>
