<?php
	session_start(); 
		
	if (isset($_POST["amount"]) && $_POST["amount"]>0 && isset($_POST["check"])) 
	{ 
		$_SESSION["amount"]= $_POST["amount"];
		$amt=$_SESSION["amount"];
		$nm=$_POST["check"];
		
		  try{
		$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=project','root','root');
		$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		foreach($nm as $x){
			$sql="update soldier set amount=amount+'$amt' where uname='$x'";
			$query=$dbhandler->query($sql);
			}
	    }
		  catch(PDOException $e){
		echo $e->getMessage();
		die();
		}
			echo"<html><script>
		window.alert('Congratulations... You have successfully donated ".$_SESSION['amount']."Thanks a lot.');
		window.location.href='notification.php';
		</script></html>";
			

			
	} 
	else{
		echo"<html><script>
		window.alert('Enter Valid amount or select people to donate');
		window.location.href='home.php';
		</script></html>";
		
	}
	
?>
</body>
</html>
