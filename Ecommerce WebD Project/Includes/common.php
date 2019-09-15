<?php
$con = mysqli_connect("localhost", "root", "", "estore")or die($mysqli_error($con));
if (!session_id()) session_start();

