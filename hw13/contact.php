<?php
session_start();
echo'<div id="container">';
	echo'<div class="panel panel-primary">';
		echo'<div class="panel-heading">Contact Form</div>';
		echo'<div class="panel-body">';
			if(isset($_GET['msg']) && $_GET['msg'] == "success")
				echo '<div class="alert alert-success" role="alert">Your entry has been recieved!<div>';
			echo'<form method="post" action="">';
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

					echo '<label>Last Name:</label>';
					if(isset($_SESSION['last']) && $_SESSION['last'] != ""){
						echo '<input class="form-control" name="lName" type="text" id="lName" onblur="vLName(this.value)" value="'.$_SESSION['last'].'">';
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
						echo '<input class="form-control" name="lName" type="text" id="lName" onblur="vLName(this.value)">';
					}

					echo '<label>Email:</label>';
					if(isset($_SESSION['emailS']) && $_SESSION['emailS'] != ""){
						echo '<input class="form-control" name="email" type="text" id="email" onblur="vEmail(this.value)" value="'.$_SESSION['emailS'].'">';
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
						echo '<input class="form-control" name="email" type="text" id="email" onblur="vEmail(this.value)">';
					}
	
					echo '<label>Phone Number:</label>';
					if(isset($_SESSION['numS']) && $_SESSION['numS'] != ""){
						echo '<input class="form-control" name="num" type="text" id="num" onblur="vNum(this.value)" value="'.$_SESSION['numS'].'">';
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
						echo '<input class="form-control" name="num" type="text" id="num" onblur="vNum(this.value)">';
					}
				
					echo '<label>DOB:</label>';
					if(isset($_SESSION['dobS']) && $_SESSION['dobS'] != ""){
						echo '<input class="form-control" name="dob" type="text" id="dob" onblur="vDOB(this.value)" value="'.$_SESSION['dobS'].'">';
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
						echo '<input class="form-control" name="dob" type="text" id="dob" onblur="vDOB(this.value)">';
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
				echo '</div>';
				echo'<button id="submit" name="submit" class="btn btn-block btn-success" type="submit" onclick="return validateForm()">Submit</button>';
			echo'</form>';
		echo'</div>';
	echo'</div>';
echo '</div>';
if(isset($_POST['submit']))
{
	$err="";
	$pcmDB=$_POST['funct'];
	$commentDB=$_POST['comment'];

	if(isset($_POST['fName']) && $_POST['fName'] != "")
	{
		$firstName=$_POST['fName'];
		$_SESSION['first']=$firstName;
	}
	else
		$err.="FnameNull";
	if(isset($_POST['lName']) && $_POST['lName'] != "")
	{
		$lastName=$_POST['lName'];
		$_SESSION['last']=$lastName;
	}
	else
		$err.="LnameNull";
	if(isset($_POST['email']) && $_POST['email'] != "")
	{
		$emailDB=$_POST['email'];
		$_SESSION['emailS']=$emailDB;
	}
	else
		$err.="emailNull";
	if(isset($_POST['num']) && $_POST['num'] != "")
	{
		$numDB=$_POST['num'];
		$_SESSION['numS']=$numDB;
	}
	else
		$err.="numNull";
	if(isset($_POST['dob']) && $_POST['dob'] != "")
	{
		$dobDB=$_POST['dob'];
		$_SESSION['dobS']=$dobDB;
	}
	else
		$err.="dobNull";

	if(isset($err) && $err != "")
		redirect("index.php?page=contact&err=$err");
	
$dblink=db_iconnect("contact_form");
$sql="Insert into `entries` (`first_name`,`last_name`,`email`,`number`,`dob`,`pcm`,`comment`) Values ('$firstName', '$lastName','$emailDB','$numDB','$dobDB','$pcmDB','$commentDB')";
$dblink->query($sql) or
	die("Something went qrong with $sql<br>".$dblink->error);
redirect("index.php?page=contact&msg=success");
}
?>

