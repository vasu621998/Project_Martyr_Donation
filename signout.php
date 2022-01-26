<?php 
session_start();
session_unset();
unset($_SESSION);
session_destroy();
$msg=$_SERVER['QUERY_STRING'];
if(isset($_GET['msg'])){
					echo "<html><script>
					alert('Invalid Access');script></html>";
					
				}
				
header("location:login.php");
?>