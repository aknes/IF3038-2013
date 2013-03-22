<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<?php
	session_start();
?>

<head>
	<title>To-Do - Registration</title>
	<link rel="stylesheet" type="text/css" title="antartica" href="css/style.css"/>
	<script type="text/javascript">
	
	//document.onclick=check;
	
	function validasiregistrasi(formregistrasi){
		if (formregistrasi.usernm.value == ""){
			alert("You must fill in all fields.");
			formregistrasi.usernm.focus();
			return(false);
		}
		if (formregistrasi.pwd.value == ""){
			alert("You must fill in all fields.");
			formregistrasi.pwd.focus();
			return(false);
		}
		if (formregistrasi.pwd2.value == ""){
			alert("You must fill in all fields.");
			formregistrasi.pwd2.focus();
			return(false);
		}
		if (formregistrasi.fullname.value == ""){
			alert("You must fill in all fields.");
			formregistrasi.fullname.focus();
			return(false);
		}
		if (formregistrasi.email.value == ""){
			alert("You must fill in all fields.");
			formregistrasi.email.focus();
			return(false);
		}
		if(formregistrasi.usernm.value.length<5){
			alert("Invalid username! Username must be more than 5 character.");
			formregistrasi.usernm.focus();
			return(false);
		}
		if(formregistrasi.pwd.value.length<8){
			alert ("Invalid password! Password must be more than 8 character.");
			formregistrasi.pwd.focus();
			return(false);
		}
		if (formregistrasi.pwd.value == formregistrasi.usernm.value){
			alert("Password and username must be different.");
			formregistrasi.pwd.focus();
			formregistrasi.usernm.focus();
			return(false);
		}
		if (formregistrasi.pwd.value == formregistrasi.email.value){
			alert("Password and email must be different");
			formregistrasi.pwd.focus();
			formregistrasi.email.focus();
			return(false);
		}
		if (formregistrasi.pwd2.value != formregistrasi.pwd.value){
			alert("Invalid password");
			formregistrasi.pwd2.focus();
			formregistrasi.pwd.focus();				
			return(false); 
		}
		var filter =/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/;
		if (!filter.test(formregistrasi.email.value)){
			alert('Invalid email');
			formregistrasi.email.focus();
			return(false);
		}
		var ext = formregistrasi.avatar.value;
		ext = ext.toLowerCase();
		var cocok = ext.substring(ext.lastIndexOf('.')+1);
		if(cocok=="jpg"||cocok=="mp4"||cocok=="png"||cocok=="txt"){
			return(true);
		}
		else
		{
			alert('Wrong file uploaded!');
			return(false);
		}
		if (formregistrasi.avatar.value == ""){
			alert("You must fill in all fields.");
			formregistrasi.avatar.focus();
			return(false);
		}
		else{
		
		}
		return (true);
	}
	</script>
	
</head>

<body>
	<div id='header'>