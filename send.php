<?php
require('connection.php');
require('functions.php');
$type= get_safe_value($con,$_POST['type']);
$name= get_safe_value($con,$_POST['name']);
$surname= get_safe_value($con,$_POST['surname']);
$email = get_safe_value($con,$_POST['email']);
$contact = get_safe_value($con,$_POST['contact']);
$msg = get_safe_value($con, $_POST['message']);
date_default_timezone_set("Asia/Kolkata");
$added_on=date('Y-m-d h:i:s');
if(
!mysqli_query($con, "INSERT INTO `contact` (`id`,`name`, `surname`,`email`,`contact`, `msg`, `type`, `status`, `added_on`) VALUES (NULL,'$name','$surname','$email','$contact','$msg','$type','1','$added_on')")
) {
    echo "<script>window.location.href='error'</script>";
} else {
    echo "<script>window.location.href='thankyou'</script>";
}