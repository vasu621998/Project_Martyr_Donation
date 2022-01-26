<!DOCTYPE html>
<html>
<head>
<style>
<style>
.button 
        {
            background-color:white;
            border: none;
            border: 2px solid darkslateblue;
            color: darkblue;
            border-radius: 5px;
            padding: 7px 10px;
            text-align: center;
            text-decoration: none;  
            display: inline-block;
            font-size: 15px;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            
            margin: 2px;
        }
		
        .button:hover 
        {
            background-color:darkslateblue;
            color: white;
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }

.container {
     
    position: relative;
}

.topleft {
    position: absolute;
    top: 150px;
    left: 465px;
    font-size: 30px;
    color:orangered;
}
.bottomleft {
    position: absolute;
    bottom: 250px;
    left: 548px;
    font-size: 30px;
    color:lawngreen;
}
    .center {
    position: absolute;
    top:250px;
    left: 150px;
    
    }

img { 
    width: 700px;
    height: 500px;
 
}
     .button 
        {
            background-color:white;
            border: none;
            border: 2px solid darkslateblue;
            color: darkblue;
            border-radius: 5px;
            padding: 7px 10px;
            text-align: center;
            text-decoration: none;  
            display: inline-block;
            font-size: 15px;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            
            margin: 2px;
        }
        
        .button:hover 
        {
            background-color:darkslateblue;
            color: white;
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }
</style>
</head>
<body>
    <form action="sharescript.php">
<center>
<div class="container">
  <img src="Share.jpg" alt="Norway" width="1000" height="300">
  <div class="topleft">I Have Donated To Our BraveHearts
    </div>
</div>

    <div class="container">
  
  <div class="bottomleft">Donate And Help Them.</div>
</div><br><br>
    <input class="button" type="submit" value="OK"/><br><br>
	<a class="button"href="notification.php">Back</a>
</center>
        </form>
</body>
</html>
