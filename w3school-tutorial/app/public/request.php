<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REQUEST PHP</title>
</head>
<body>

 <!-- $_REQUEST   -->
 <!-- we can collect data after submitting an HTML form   -->
  <form method ="post" action="<?php echo $_SERVER['PHP_SELF']?>">
     Name: <input type="text" name="fname">
           <input type="submit">
  </form>
   
<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //collect value of input field
    $name = $_REQUEST["fname"];
    if(empty($name))
    {
        echo "name is empty";
    }
    else 
    {
        echo $name;
    }
}
?>

</body>
</html>

