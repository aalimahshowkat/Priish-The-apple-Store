<?php
session_start();
require 'config.php';

?>

<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <style>
         body{
             background-color: #777;
         }
    
         .logbar{
             border: solid 2px black;
             border-radius: 10px;
             text-align-last: center;
             width: 30%;
             align-content: center;
            font-family: "Lato", sans-serif;
             margin: 10px;
             padding: 10px 
         }
    
    </style>
<title>home page</title>
    
    <body style="background-image: url(zaza.jpg);">
        <div>
        <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="p11.php" class="w3-bar-item w3-button"><b>HOME</b></a>
    
            
            
            
            
            
  </div>
            
             </div>
        <br>
            <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"><span class="w3-hide-small">PRIISH</span></span>
  </div>
                <br>
</div>
            <br>
        <center>
            <form class="logbar" method="post" action="homepage.php"  style="background-color: gainsboro">
            <h1>Welcome  <?php echo $_SESSION['username']; ?>
           </h1>
            <img src="no_user_logo.jpeg " style="width: 150px; border-radius: 50px; align-content: center; margin: 10px; border: solid 1px;"><br> 
           
         <input type="submit" name="log" value="Log out" style="width=50%;color: white; background-color: black;">
            </form>
            </center>
       <center> 
        
<form class="logbar" method="post" action="homepage.php" style="background-color: gainsboro" >
    <b>
Add Sales<br>
User
<input type="radio" name="typ" value="user">
Vendor
<input type="radio" name="typ" value="vendor"><br>
Product Name<br>
<input type="text" name="pro" placeholder="Product's name"><br> 
Product Code<br>
<input type="number" name="code" placeholder="Product's Code"><br>
Quanity<br>
<input type="number" name="qua" placeholder="Quantity">
    <br>
Bill number<br>
<input type="number" name="bno" placeholder="Bill no"> 
<br>
Bill amount<br>
<input type="number" name="amount" placeholder="Total amount"> <br><h6></h6>
<input type="submit" value="Add" name="submitb"  style="width=50%;color: white; background-color: black">
</b>
</form>
</center>
              
<?php
      if(isset($_POST['submitb']))
    {
       /*echo ' <script type="text/javascript">
        alert("sign up buttom clicked");
        </script>';*/
         
         $typ=$_POST['typ'];
         $proname=$_POST['pro'];
         $procode=$_POST['code'];
        $quan=$_POST['qua'];
         $billno=$_POST['bno'];
         $billamount=$_POST['amount'];
            if($typ=='user')  
            {
            $query="insert into db values('$proname','$procode',' $quan','$billno',' $billamount')";
               
               $query_run=mysqli_query($con,$query);
    if($query_run)
    {
        echo '<script type="text/javascript">
        alert("Sale Added!");
        </script>';      
    }
    else
    {   
        echo '<script type="text/javascript">
        alert("Error...TRY AGAIN");
        </script>';      
    }
                }
          else
          {
              $query="insert into dbs values('$proname','$procode',' $quan','$billno',' $billamount')";
               
               $query_run=mysqli_query($con,$query);
    if($query_run)
    {
        echo '<script type="text/javascript">
        alert("Sale Added!");
        </script>';      
    }
    else
    {   
        echo '<script type="text/javascript">
        alert("Error...TRY AGAIN");
        </script>';      
    }  
          }
            }    
?>       
        <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
<h4>Social Connect</h4>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
      <a href="www.facebook.com"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
    
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  
</footer>
        <?php  
        if(isset($_POST['log']))
        {  
             
            session_destroy();
        header('location:login.php');
        
        }
       ?>
        
    </body>
</html>