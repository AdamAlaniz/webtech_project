<?php
$firstName=$_POST['fName'];
$lastName=$_POST['lName'];
$email=$_POST['email'];
$num=$_POST['num'];
$dob=$_POST['dob'];
$pcm=$_POST['funct'];
$comment=$_POST['comment'];
echo "<div>First Name: $firstName</div>";
echo "<div>Last Name: $lastName</div>";
echo "<div>Email: $email</div>";
echo "<div>Phone Number: $num</div>";
echo "<div>Date of Birth: $dob</div>";
echo "<div>Perferred Contact Method: $pcm</div>";
echo "<div>Comment(s): $comment</div>";
?>
