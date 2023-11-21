<?php
$server="localhost";
$username = "root";
$password = "";
$dbname="donation";

$conn= mysqli_connect($server,$username,$password,$dbname);
if(!$conn){
    echo "NO";
}


$name=$_POST['name'];
$email=$_POST['email'];
$donation=$_POST['donation'];

$sql="INSERT INTO `details`(`name`, `email`, `donation`) VALUES ('$name','$email','$donation')";

$result=mysqli_query($conn,$sql);

if($conn){
    include 'checkout.html';
}
else{
    echo "Failed contact Admin";
}

?>