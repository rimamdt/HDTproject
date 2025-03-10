<?php
$con = new mysqli('localhost', 'root', '', 'hdtproject');

if (!$con) {
    die(mysqli_error($con));
}