<?php

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'contactdb');

if($con){
    echo "connected";
}
else{
    echo " not conneted";
}

?>