<?php
session_start();
	function redirect ($uri){
		?>
		<script type="text/javascript">
			<!--
			document.location.href="<?php echo $uri; ?>"
			-->
		</script>
 <?php die;}
?>
<?php
echo '<!DOCTYPE html>';

echo'<html>';
echo'<head>';
echo'<meta charset="utf-8">';
echo'<title>Contact</title>';
echo'<link rel="stylesheet" href="assets/css/bootstrap.css">';
echo'<link rel="stylesheet" href="assets/css/basic.css">';
echo'<style>';
	echo'#container{padding: 10px}';
echo'</style>';
echo'<script src="assets/js/validation.js"></script>';
echo'</head>';
echo'<body>';
	echo'<div id="page-inner">';
		echo'<ul class="nav nav-tabs">';
			echo'<li role="presentation"><a href="index.html">Home</a></li>';
			echo'<li role="presentation"><a href="school.html">School</a></li>';
			echo'<li role="presentation"><a href="work.html">Work</a></li>';
			echo'<li role="presentation" class="active"><a href="contact.html">Contact</a></li>';
		echo'</ul>';
		echo'<div id="container">';
			echo'<div class="panel panel-primary">';
				echo'<div class="panel-heading">Contact Form</div>';
				echo'<div class="panel-body">';
					echo'<form name="myForm" method="post" action="">';
								echo '<div class="form-group">';
								echo '<label>First Name:</label>';

								if(isset($_SESSION['first']) && $_SESSION['first'] != ""){
									echo '<input class="form-control" name="fName" type="text" id="fName" onblur="vFName(this.value)" value="'.$_SESSION['first'].'">';
								}
								else if(isset($_GET['err']) && strstr($_GET['err'], "FnameNull"))
								{
									echo '<div class="form-group has-error">';
									echo '<label for=inputError1>First Name:</label>';
									echo '<input class="form-control" id="inputError1" name="fName" type="text" id="fName" onblur="vFName(this.value);">';
									echo '<p class="help-block" id="fNameHelp">Cannot Be Blank!</p>';
									echo '</div>';
								}
								else{
									echo '<input class="form-control" name="fName" type="text" id="fName" onblur="vFName(this.value)">';
								}
									echo '</div>';
								if(isset($_SESSION['last']) && $_SESSION['last'] != ""){
									echo '<input class="form-control" name="lName" type="text" id="lName" onblur="vLName(this.value)" value="'.$SESSION['last'].'">';
								}
								else if(isset($_GET['err']) && strstr($_GET['err'], "LnameNull"))
								{
									echo '<div class="form-group has-error">';
									echo '<label for=inputError1>Last Name:</label>';
									echo '<input class="form-control" id="inputError1" name="lName" type="text" id="lName" onblur="vLName(this.value);">';
									echo '<p class="help-block" id="lNameHelp">Cannot Be Blank!</p>';
									echo '</div>';
								}
								else{
									echo '<div class="form-group">';
									echo '<label>Last Name:</label>';
									echo '<input class="form-control" name="lName" type="text" id="lName" onblur="vLName(this.value);">';
									echo '<p class="help-block" id="lNameHelp"></p>';
									echo '</div>';
								}
								if(isset($_SESSION['email2']) && $_SESSION['email2'] != ""){
									echo '<input class="form-control" name="email" type="text" id="email" onblur="vEmail(this.value)" value="'.$SESSION['email2'].'">';
								}
								else if(isset($_GET['err']) && strstr($_GET['err'], "emailNull"))
								{
									echo '<div class="form-group has-error">';
									echo '<label for=inputError1>Email:</label>';
									echo '<input class="form-control" id="inputError1" name="email" type="text" id="email" onblur="vEmail(this.value);">';
									echo '<p class="help-block" id="emailHelp">Cannot Be Blank!</p>';
									echo '</div>';
								}
								else{
									echo '<div class="form-group">';
									echo '<label>Email:</label>';
									echo '<input class="form-control" name="email" type="text" id="email" onblur="vEmail(this.value);">';
									echo '<p class="help-block" id="emailHelp"></p>';
									echo '</div>';
								}
								if(isset($_SESSION['num2']) && $_SESSION['num2'] != ""){
									echo '<input class="form-control" name="num" type="text" id="num" onblur="vNum(this.value)" value="'.$SESSION['num2'].'">';
								}
								else if(isset($_GET['err']) && strstr($_GET['err'], "numNull"))
								{
									echo '<div class="form-group has-error">';
									echo '<label for=inputError1>Phone Number:</label>';
									echo '<input class="form-control" id="inputError1" name="num" type="text" id="num" onblur="vNum(this.value);">';
									echo '<p class="help-block" id="numHelp">Cannot Be Blank!</p>';
									echo '</div>';
								}
								else{
									echo '<div class="form-group">';
									echo '<label>Phone Number:</label>';
									echo '<input class="form-control" name="num" type="text" id="num" onblur="vEmail(this.value);">';
									echo '<p class="help-block" id="numHelp"></p>';
									echo '</div>';
								}
								if(isset($_SESSION['dob2']) && $_SESSION['dob2'] != ""){
									echo '<input class="form-control" name="dob" type="text" id="dob" onblur="vDOB(this.value)" value="'.$SESSION['dob2'].'">';
								}
								else if(isset($_GET['err']) && strstr($_GET['err'], "dobNull"))
								{
									echo '<div class="form-group has-error">';
									echo '<label for=inputError1>DOB:</label>';
									echo '<input class="form-control" id="inputError1" name="dob" type="text" id="dob" onblur="vDOB(this.value);">';
									echo '<p class="help-block" id="dobHelp">Cannot Be Blank!</p>';
									echo '</div>';
								}
								else{
									echo '<div class="form-group">';
									echo '<label>DOB:</label>';
									echo '<input class="form-control" name="dob" type="text" id="dob" onblur="vEmail(this.value);">';
									echo '<p class="help-block" id="dobHelp"></p>';
									echo '</div>';
								}
								if(isset($_GET['err']) && strstr($_GET['err'], "pcmNull"))
								{
									echo '<br>';
									echo '<div class="form-group">';
									echo '<label>Peferred Contact Method:</label>';
									echo '<select id="funct" name="funct" onchange="vPCM(this.value)">';
									echo '<option>---</option>';
									echo '<option value="email">Email</option>';
									echo '<option value="phonenumber">Phone Number</option>';
									echo '</select>';
									echo '<p class="help-block" id="pcmHelp"></p>';
									echo '</div>';
								}
								else{
									echo '<div class="form-group">';
									echo '<label>Peferred Contact Method::</label>';
									echo '<select id="funct" name="funct" onchange="vPCM(this.value)">';
									echo '<option>---</option>';
									echo '<option value="email">Email</option>';
									echo '<option value="phonenumber">Phone Number</option>';
									echo '</select>';
									echo '<p class="help-block" id="pcmHelp"></p>';
									echo '</div>';
								}
								if(isset($_GET['err']) && strstr($_GET['err'], "commentNull"))
								{
									echo '<div class="form-group">';
									echo '<label>Comment:</label>';
									echo '<br>';
									echo '<textarea name="comment" rows="10" cols="50" id="comment" onblur="vComment(this.value);"</textarea>';
									echo '<p class="help-block" id="commentHelp"></p>';
									echo '</div>';
								}
								else{
									echo '<div class="form-group">';
									echo '<label>Comment:</label>';
									echo '<br>';
									echo '<textarea name="comment" rows="10" cols="50" id="comment" onblur="vComment(this.value);"></textarea>';
									echo '<p class="help-block" id="commentHelp"></p>';
									echo '</div>';
								}
						echo'<hr>';
						echo'<button id="submit" name="submit" class="btn btn-block btn-success" type="submit" onclick="return validateForm()">Submit</button>';
					echo'</form>';
				echo'</div>';
			echo'</div>';
		echo'</div>';
	echo'</div>';
echo'</body>';
echo'</html>';
if(isset($_POST['submit']))
{
	$err="";
	$pcm=$_POST['funct'];
	$comment=$_POST['comment'];

	if(isset($_POST['fName']) && $_POST['fName'] != "")
	{
		$firstName=$_POST['fName'];
		$_SESSION['first']=$firstname;
	}
	else
		$err.="FnameNull";
	if(isset($_POST['lName']) && $_POST['lName'] != "")
	{
		$lastName=$_POST['lName'];
		$_SESSION['last']=$lastname;
	}
	else
		$err.="LnameNull";
	if(isset($_POST['email']) && $_POST['email'] != "")
	{
		$email=$_POST['email'];
		$_SESSION['email']=$email;
	}
	else
		$err.="emailNull";
	if(isset($_POST['num']) && $_POST['num'] != "")
	{
		$num=$_POST['num'];
		$_SESSION['num']=$num;
	}
	else
		$err.="numNull";
	if(isset($_POST['dob']) && $_POST['dob'] != "")
	{
		$dob=$_POST['dob'];
		$_SESSION['dob']=$dob;
	}
	else
		$err.="dobNull";

	if(isset($err) && $err != "")
		redirect("contact.php?err=$err");
}

echo "<div>First Name: $firstName</div>";
echo "<div>Last Name: $lastName</div>";
echo "<div>Email: $email</div>";
echo "<div>Phone Number: $num</div>";
echo "<div>Date of Birth: $dob</div>";
echo "<div>Perferred Contact Method: $pcm</div>";
echo "<div>Comment(s): $comment</div>";
?>

