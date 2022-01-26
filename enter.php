


<?php


    $unm = $_POST['uname'];
    $p = $_POST['pass'];
    $ml = $_POST['email'];
    $mobno = $_POST['mob'];
    $count = $_POST['country'];
    $adno = $_POST['adhaar'];
    $benname = $_POST['bname'];
    $acno = $_POST['acc'];
	$bkname = $_POST['bank'];
    $ifsccode = $_POST['ifsc'];
    
    try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=project','root','root');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="insert into civilian (uname,pass,email,mob,country,adhaar,bname,acc,bank,ifsc) values ('$unm','$p','$ml','$mobno','$count','$adno','$benname','$acno','$bkname','$ifsccode')";
	$query=$dbhandler->query($sql);
	
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}
 echo"Registered";
?>
<html>
<html>
<script>
window.alert("You are Registered");
window.location.href="login.php";
</script>
</html>

</html>
