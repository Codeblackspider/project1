<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="main"> 
       <?php 
       $name = $_POST['username'];
       $password = $_POST['Password'];
       
       

if (isset ($_POST['login']))
{

    
    
    if($_COOKIE["name"]!=$name ){
        echo"<h1>"."Check Username "."</h1>"."<br>";
    }
    
    elseif($_COOKIE["pass"]!=$password){
        echo"<h1>"."wrong password"."</h1>"."<br>";
    
    }
    
    
    else{
    
        echo "<h1>"."LOGIN SUCCESSFUL"."</h1>";
    }

}
    
    
    ?>
</div>
    
</body>
</html>