<?php include 'conction.php' ?>
<?php
//get data from query string and escape variables for security
$Id =mysqli_real_escape_string($connection, $_GET['id']);
$name = mysqli_real_escape_string($connection, $_GET['name']);
$email = mysqli_real_escape_string($connection, $_GET['email']);
$phone = mysqli_real_escape_string($connection, $_GET['phone']);
$attack = mysqli_real_escape_string($connection, $_GET['attack']);
$age = mysqli_real_escape_string($connection, $_GET['age']);
$photo = mysqli_real_escape_string($connection, $_GET['photo']);
$know = mysqli_real_escape_string($connection, $_GET['know']);
$gender = mysqli_real_escape_string($connection, $_GET['gender']);
$descript = mysqli_real_escape_string($connection, $_GET['descript']);
$state = $_GET["state"];

if ($state == 'insert') {
    
    $query = "INSERT INTO users_224( name, email, phone, attack, age, photo, know, gender, descript ) VALUES ('$name', '$email', '$phone', '$attack', '$age', '$photo', '$know', '$gender', '$descript')";
    
}
if ($state == 'edit'){
    $query = "UPDATE users_224 SET name='$name',email='$email',phone='$phone',attack='$attack',age='$age',photo='$photo',know='$know',gender='$gender',descript='$descript' where id='$Id'";
}
$result = mysqli_query($connection,$query);
  $newId=mysqli_insert_id($connection);



if (!$result) {
    echo "failed";
    die("DB query failed.");
}
header('Location:http://localhost/redhood/objectU.php?id='.$Id );

