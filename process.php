<?php
include 'db.php';

// check whether the fields are empty or not
if($_POST['message']=='' || $_POST['username'=='']){
    header("Location: index.php?error=Please%20Fill%20All%Fields");
}else{
    echo 'Submitted';
}