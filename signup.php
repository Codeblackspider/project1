<?php


$name = $_POST['username'];
$password = $_POST['Password'];
$rePassword = $_POST['rePassword'];






   setcookie("name", "$name", time()+10600, "/","", 0);
   setcookie("pass", "$password", time()+3600, "/", "",  0);
?>
<html>
<head>
      <title>Setting Cookies with PHP</title>
   </head>
   
   <body>
      

      <?php 

            if (isset ($_POST['signup']))
            {
            
                
                
              if($password == $rePassword){

               echo "your account created";
              }

              else{
               echo"password not same";
              }
            }


      ?>


      
   </body>
   
</html>