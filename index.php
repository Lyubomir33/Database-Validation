<?php 

require "../PHP/database/connection.php";

$first_name_regex = '/^[A-Za-zА-Яа-я\s]+$/u';
$last_name_regex = '/^[A-Za-zА-Яа-я\s]+$/u';
$phone_regex = '/^(?:\+359|0)(?:\d\s?){9,13}$/';
$email_regex = '/^[a-zA-Z0-9.!#$%&\'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/';

$first_name_error = "";
$last_name_error = "";
$email_error = "";
$phone_error = "";

if($_SERVER['REQUEST_METHOD'] == 'POST') {


  $fName = $_POST['firstName'];
  $lName = $_POST['lastName'];
  $email = $_POST['email'];
  $phone = $_POST['phoneNumber']; 
   

  if(empty($fName) ) {
    $first_name_error = "Полето 'Първо име' е задължително";

  } else if(!preg_match($first_name_regex, $fName)){

    $first_name_error = "В полето можете да пишете САМО букви!";

   }

  if(empty($lName) ) {
    $last_name_error = "Полето 'Фамилия' е задължително";
   } else if(!preg_match($last_name_regex, $lName)){

    $last_name_error = "В полето можете да пишете САМО букви!";

   }

   if(empty($email) ) {
    $email_error = "Полето 'Имейл' е задължително";
   } else if(!preg_match($email_regex, $email)){
    $email_error = "Mоля въведете валиден формат на имейла!";
   }

   if(empty($phone)) {
    $phone_error = "Полето 'Телефон' е задължително";
   } elseif(!preg_match($phone_regex, $phone)){
    $phone_error = "Моля въведете валиден формат на телефона"; 
   }


  

  

   if(preg_match($first_name_regex, $fName) && preg_match($last_name_regex, $lName) && preg_match($phone_regex, $phone) && preg_match($email_regex, $email) && 
   !empty($fName) && !empty($lName) && !empty($email) && !empty($phone) ) {
      
    $sql = "INSERT INTO articles (first_name, last_name, email, phone) VALUES ('$fName', '$lName', '$email', '$phone')";

    
    mysqli_query($conn, $sql);

    header("Location: ../HTML/index.html");
      
   } 
   
}

$sql_select ='SELECT * FROM articles';

  $result = mysqli_query($conn,$sql_select);

   if(mysqli_num_rows($result) > 0) {
    
    
      foreach($result as $key => $cols) {
        // print_r($cols['email']);
      }

   } else {
    // print "0 results";
   }


?>

