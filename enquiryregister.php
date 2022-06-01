<?php
if(isset($_POST['name']))
{
$name=$_POST['name'];
$city=$_POST['city'];
$state=$_POST['state'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$gender=$_POST['gender'];
$weight=$_POST['weight'];
$formcontent="From: $name \n city : $city \n state : $state \n Phone : $phone \n Email : $email \n  Day : $day \n  Month: $month \n  year: $year \n  Gender: $gender  \n  Weight: $weight";
$recipient = "info@icbiocro.com";
$subject = "Enquiry from Website";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo"<script>alert('We will contact you as soon as possible')</script>";
echo"<script>window.location.href='index.html'</script>";
}
else
{
    echo"<script>alert('Please Try Again !!!')</script>";
echo"<script>window.location.href='contact.html'</script>";
}
?>