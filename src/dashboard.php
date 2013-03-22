<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
						"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<meta charset="utf-8" />
		<link id="style"  rel="stylesheet" type="text/css" href="css/style.css"></link>
		<title>My Dashboard</title>
	</head>
	
	<body>
		<div class="header">
			<ul class="ulheader">
				<li><a href="dashboard.php"><img src="images/todolistss.jpg" alt="logo"/></a></li>
				<li><a href="dashboard.php" id="linkdashboard">DashBoard</a></li>
				<li><a href="halamanprofil.php" id="linkprofile">My Profile</a></li>
				<li><a href="logout.php" id="linklogout">LogOut</a></li>
				<li><input type="text" id="search" value="search.."/></li>
			</ul>
		</div>

		<div class="content">
			<div id="leftside">
				<div id="newkategoritombol">
					<a id="font" href="#join_form" >Tambah Kategori</a>
				</div>
				<div id="listkategori">
					<ul id="listkategory" class="ullistkategori">
						<li class="lilistkategori" ><a href="progin.php">PROGIN</a></li>
					</ul>
				</div>
			</div>
			
			<div id="mainarea">
				<table class="namatask">
				<tr>
					<th>Nama Task</th>
					<th>Deadline</th>
					<th>Tag Multivalue</th>
				</tr>
				<tr>
					<td><a href="spesifikasi2.php">Tubes Progin I</a></td>
					<td>23 Februari 2013</td>
					<td>html,css</td>
				</tr>
				<tr class="alt">
					<td><a href="spesifikasi2.php">Tubes IMK Flash</a></td>
					<td>23 Februari 2013</td>
					<td>ngeselin</td>
				</tr>
				</table>
			</div>
			
		</div>
	
		<script language="javascript">
			function addElement()
			{
				var element = document.getElementById('namakategori').value;
				if(element=="")
				{
					document.getElementById('listkategori').style.display="block";
					document.getElementById('listkategori').innerHTML= "Error! Insert a description for the element";
				}	
				else
				{
					var container = document.getElementById('listkategory');
					var new_element = document.createElement("li");
					new_element.className="lilistkategori";
					a1= document.createElement("a");
				
					a1.href="progin.html";
					new_element.appendChild(a1);
					
					
					a1.innerHTML = element;
					
					container.appendChild(new_element);
					container.insertBefore(new_element,container.firstChild);
				
				}
			}
		</script>
		
		<div class="footer"></div>
		
		<a href="#" class="overlay" id="join_form"></a>
		
		<div class="popup">
			<p>Please enter the specification for new category</p>
			
			<div >
				<label for="namakategori">Nama Kategori :</label>
				<input type="text" id="namakategori" value=""/>
			</div>
			
			<div>
				<label for="peserta">Anggota :    </label>
				<input type="text" id="peserta" value=""/>
			</div>
			
			<div class="tombol">
				<div id="buttonOK" >
					<input type="button" value="OK" onClick="addElement()"></input>
				</div>
				
				<div id="close">
					<a  href="#close"  >CLOSE</a>
				</div>	
			</div>
		</div>
	
	</body>
</html>
