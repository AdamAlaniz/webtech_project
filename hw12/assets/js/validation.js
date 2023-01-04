//JavaScript
function vFName(){
	var name2 = document.getElementById('fName').value;
	var letters2 = /^[a-zA-Z]+$/;
	
	if(!name2.match(letters2)){
		document.getElementById('fNameHelp').innerHTML = 'Only Valid Characters Please!';
	}
	else{
		//document.getElementById('lnameHelp').innerHTML = 'Only Valid Characters Please!';
	}
}
function vLName(){
	var name2 = document.getElementById('lName').value;
	var letters2 = /^[a-zA-Z]+$/;
	
	if(!name2.match(letters2)){
		document.getElementById('lNameHelp').innerHTML = 'Only Valid Characters Please!';
	}
	else{
		//document.getElementById('lnameHelp').innerHTML = 'Only Valid Characters Please!';
	}
}
function vEmail(){
	var email = document.getElementById('email').value;
	var validEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/; 
	
	if(!email.match(validEmail)){
		document.getElementById('emailHelp').innerHTML = 'Please Enter a Valid Email!';
	}
	else{
		//document.getElementById('emailHelp').innerHTML = 'Please Enter a Valid Email!';
	}
}
function vNum(){
	var num = document.getElementById('num').value;
	var validNum = /^(\()?\d{3}(\))?(-|\s)?\d{3}(-|\s)\d{4}$/;
	
	if(!num.match(validNum)){
		document.getElementById('numHelp').innerHTML = 'Please Enter a Valid Phone Number! (xxx-xxx-xxxx)';
	}
	else{
		//document.getElementById('numHelp').innerHTML = 'Please Enter a Valid Phone Number! (xxx-xxx-xxxx)';
	}
}
function vDOB(){
	var dob = document.getElementById('dob').value;
	var validDOB = /^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/;
	
	if(!dob.match(validDOB)){
		document.getElementById('dobHelp').innerHTML = 'Please Enter a Valid Entry! (mm/dd/yyyy)';
	}
	else{
		//document.getElementById('dobHelp').innerHTML = 'Please Enter a Valid Entry! (mm/dd/yyyy)';
	}
}
function vPCM(){
	if(document.getElementById('funct').value == 'email2'){
		vEmail();
	}
	else if(document.getElementById('funct').value == 'number'){
		vNum();
	}
}
function vComment(){
	var comment = document.getElementById('comment').value;
	var letters = /^[a-zA-Z\s]+$/;
	
	if(!comment.match(letters)){
		document.getElementById('commentHelp').innerHTML = 'Only Valid Characters Please!';
	}
	else{
		//document.getElementById('fnameHelp').innerHTML = 'Only Valid Characters Please!';
	}
}

/*function validateForm(){
	let a = document.forms["myForm"]["fName"].value;
	let b = document.forms["myForm"]["lName"].value;
	let c = document.forms["myForm"]["email"].value;
	let d = document.forms["myForm"]["num"].value;
	let e = document.forms["myForm"]["dob"].value;
	if (a == "") {
		alert("First Name must be filled out");
		return false;
	}
	if (b == "") {
    alert("Last Name must be filled out");
    return false;
  }
	if (c == "") {
    alert("Email must be filled out");
    return false;
  }
	if (d == "") {
    alert("Phone Number must be filled out");
    return false;
  }
	if (e == "") {
    alert("Date of Birth must be filled out");
    return false;
  }
}*/