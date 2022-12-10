<!DOCTYPE html>
<html>
<body>
<form action="" method="post">
  <input type="text" name="name">
  <button type="submit" name="submit">button</button>
</form>
<?php
@$name=$_POST["name"];
$arr=array("name"=>"{$name}","id"=>"$name");
    function myfunction($a)
    { 
      $b=$a;
      return $b;
    }


    if(isset($_POST["submit"]))
    {
      $a3=myfunction($arr);
    }
?>
<h1><?php   print_r($a3["name"]);?></h1>
 
</body>
</html>
