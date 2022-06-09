<?php

@session_start();

$con = mysqli_connect("localhost", "root", "", "akademik");
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
}
