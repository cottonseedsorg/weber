<?php
function get_safe_value($con, $str){
    if($str!=''){
        $str=trim($str);
    return mysqli_real_escape_string($con, $str);
    }
}
function pr($arr){
    echo'<pre>';
    print_r($arr);
}
function prx($arr){
    echo'<pre>';
    print_r($arr);
    die();
}

// Function to get the client IP address
function get_client_ip() {
    $ip = getenv('HTTP_CLIENT_IP')?:
getenv('HTTP_X_FORWARDED_FOR')?:
getenv('HTTP_X_FORWARDED')?:
getenv('HTTP_FORWARDED_FOR')?:
getenv('HTTP_FORWARDED')?:
getenv('REMOTE_ADDR');
$ip = trim($ip);
return $ip;
}
?>