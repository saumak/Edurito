<?php
include('connections.php');
session_start();
?>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$query = "INSERT INTO contact(name, email, msg) VALUES ('$name', '$email','$msg')";
$result = pg_query($connections, $query);

if(isset($_POST['submit'])){
    if(empty($name) || empty($email) || empty($msg)){
    //echo 'hi there';
    header("Location: ../signup.php?signup=empty");
    exit();
  }
  else{
    if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
      header("Location: ../contact.php?contact=invalid");
      exit();
    }else{
      //checking email entered is valid
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../contact.php?contact=invalid_email");
        exit();
      }
    }
  }
}
    else{   // else{

      header("Location:success.html");
    }
 ?>
