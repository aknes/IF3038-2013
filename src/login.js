function validasilogin(form){
	if (form.username.value == ""){
		alert("Invalid username!");
		form.username.focus();
		return(false);
	}
	if (form.password.value == ""){
		alert("Invalid password!");
		form.password.focus();
		return(false);
	}
	if ((form.username.value == "") && (form.password.value == "")){
		alert("Invalid login!");
		form.password.focus();
		return(false);
	}
	if ((form.username.value == "nenez")&&(form.password.value == "nenez")){
		setTimeout("location.href = 'dashboard.php';");
	}
	return(true);
}