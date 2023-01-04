//JavaScript
function calc(){
	var num1=document.getElementById('num1').value;
	var num2=document.getElementById('num2').value;
	let answer;
	var regEx=/^\d+$/;
	if(!num1.match(regEx)){
		document.getElementById('num1Help').innerHTML='Numbers Only Please!';
		document.getElementById('submit').removeClass('btn-success');
		document.getElementById('submit').addClass('btn-danger');
	}
	else if(!num2.match(regEx)){
		document.getElementById('num2Help').innerHTML='Numbers Only Please!';
		document.getElementById('submit').removeClass('btn-success');
		document.getElementById('submit').addClass('btn-danger');
	}
	else{
		if(document.getElementById('funct').value == 'multiply'){
			answer=parseInt(num1) * parseInt(num2);
		}
		else if(document.getElementById('funct').value == 'add'){
			answer=parseInt(num1) + parseInt(num2);
		}
		else if(document.getElementById('funct').value == 'subtract'){
			answer=parseInt(num1) - parseInt(num2);
		}
		else if(document.getElementById('funct').value == 'divide'){
			answer=parseInt(num1) / parseInt(num2);
		}
		var output=document.getElementById('answer');
		output.innerHTML='<h2> The answer is: '+answer+'</h2>';
		document.getElementById('num1Help').innerHTML='';
		document.getElementById('num2Help').innerHTML='';
	}
}
