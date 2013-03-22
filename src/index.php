<!DOCTYPE html>
<html lang="en" >
<?php
	session_start();
	// store session data
?>
<head>

	<link href="css/style2.css" rel="stylesheet" type="text/css" />
	<meta charset="utf-8" />
	<title>ToDo: Make a To-Do List!</title>
	
	<script type="text/javascript" src="login.js"></script>
	
	<script type="text/javascript" src="regist.js"></script>
</head>

<body>
	<header>
		
		<a href="index.php" class="stuts"><img src="images/todolistss.jpg"></a>
		
		
		<?php
			if(!isset($SESSION['uname'])){
			echo"
				<div class='panel';>
				<form name='login' action='' method='POST' onSubmit='return validasilogin(this)'>	                  
				<ul>
					<li><label for='username'>Username: </label>
					<input type='text' id='username' value=''/></li>	
					<li><label for='password'>Password: </label>
					<input type='password' id='password' value=''/></li>
					<li><input id='loginbut' name='login' type='submit' value='Log In' /></li>
				</ul>
				</form>
			</div>";
			} else {
				echo"";
			}
		?>
		
		<div id="sign">
		<?php
			if (!isset($_SESSION['uname'])){
				echo "";
			}
			else{
				echo "Welcome home<a href='profile.php'>".$_SESSION['uname']."</a>.! Make a To-Do List!<a href='logout.php'>Logout</a>";
			}
		?>
		</div>
		
	</header>

	<div class="main">
		<a href="#join_form" id="register">Sign Up For Free </a>
	</div>

	<!-- popup form #2 -->
	<a href="#x" class="overlay" id="join_form"></a>
	
	<div class="popup">
		<form name="formregistrasi" action="" method="POST" enctype="multipart/form-data" onSubmit="return validasiregistrasi(this)">

		<h2>Sign Up</h2>
		<p>Please enter your details here</p>
		<div>
			<label for="usernm">Username</label>
			<input type="text" id="usernm" value="" />
		</div>
		<div>
			<label for="pwd">Password</label>
			<input type="password" id="pwd" value="" />
		</div>
		<div>
			<label for="pwd2">Confirm Password</label>
			<input type="password" id="pwd2" value="" />
		</div>
		<div>
			<label for="fullname">Full Name</label>
			<input type="text" id="fullname" value="" />
		</div>
		<div>
			<label for="birthday">Birthday</label>
			<select name="date">
			  <option value="1">1</option>
			  <option value="2">2</option>
			  <option value="3">3</option>
			  <option value="4">4</option>
			  <option value="5">5</option>
			  <option value="6">6</option>
			  <option value="7">7</option>
			  <option value="8">8</option>
			  <option value="9">9</option>
			  <option value="10">10</option>
			  <option value="11">11</option>
			  <option value="12">12</option>
			  <option value="13">13</option>
			  <option value="14">14</option>
			  <option value="15">15</option>
			  <option value="16">16</option>
			  <option value="17">17</option>
			  <option value="18">18</option>
			  <option value="19">19</option>
			  <option value="20">20</option>
			  <option value="21">21</option>
			  <option value="22">22</option>
			  <option value="23">23</option>
			  <option value="24">24</option>
			  <option value="25">25</option>
			  <option value="26">26</option>
			  <option value="27">27</option>
			  <option value="28">28</option>
			  <option value="29">29</option>
			  <option value="30">30</option>
			  <option value="31">31</option>
			</select>
			<select name="month">
			  <option>1</option>
			  <option>2</option>
			  <option>3</option>
			  <option>4</option>
			  <option>5</option>
			  <option>6</option>
			  <option>7</option>
			  <option>8</option>
			  <option>9</option>
			  <option>10</option>
			  <option>11</option>
			  <option>12</option>
			</select>
			<select name="year">
			  <option>1955</option>
			  <option>1956</option>
			  <option>1957</option>
			  <option>1958</option>
			  <option>1959</option>
			  <option>1960</option>
			  <option>1961</option>
			  <option>1962</option>
			  <option>1963</option>
			  <option>1964</option>
			  <option>1965</option>
			  <option>1966</option>
			  <option>1967</option>
			  <option>1968</option>
			  <option>1969</option>
			  <option>1970</option>
			  <option>1971</option>
			  <option>1972</option>
			  <option>1973</option>
			  <option>1974</option>
			  <option>1975</option>
			  <option>1976</option>
			  <option>1977</option>
			  <option>1978</option>
			  <option>1979</option>
			  <option>1980</option>
			  <option>1981</option>
			  <option>1982</option>
			  <option>1983</option>
			  <option>1984</option>
			  <option>1985</option>
			  <option>1986</option>
			  <option>1987</option>
			  <option>1988</option>
			  <option>1989</option>
			  <option>1990</option>
			  <option>1991</option>
			  <option>1992</option>
			  <option>1993</option>
			  <option>1994</option>
			  <option>1995</option>
			  <option>1996</option>
			  <option>1997</option>
			  <option>1998</option>
			  <option>1999</option>
			  <option>2000</option>
			  <option>2001</option>
			  <option>2002</option>
			  <option>2003</option>
			  <option>2004</option>
			  <option>2005</option>
			  <option>2006</option>
			  <option>2007</option>
			  <option>2008</option>
			  <option>2009</option>
			  <option>2010</option>
			  <option>2011</option>
			  <option>2012</option>
			  <option>2013</option>
			</select>
		</div>
		<div>
			<label for="email">Email</label>
			<input type="text" id="email" value="" />
		</div>
		
		<div>
			<label for="avatar">Avatar</label>
			<input type="file" accept="image/jpeg" size="20" maxlength="20" />
		</div>
		
		<input name="signup" type="submit" value="Sign Up" />

		<a class="close" href="#close"></a>
		</form>
	</div>
</body>
</html>