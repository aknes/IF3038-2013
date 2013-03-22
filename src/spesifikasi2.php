<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
						"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<link id="style" rel="stylesheet" type="text/css" href="css/style.css"></link>		
		<title>Spesifikasi Tubes IMK Flash</title>
	</head>

	<body>
		<span id="background"></span>
			
		<div id="logo">
			<img src="images/image.jpg" alt="logogambar" width="100" height="75"/>
			<a href="dashboard.html"><img src="images/logo1.jpg" alt="logo" width="100" height="30"/></a>
		</div>
					
		<div class="header">
		
			<ul id="header">
				<li ><a href="dashboard.html">Home</a></li>
				<li ><a href="halamanprofil.html">Profil</a></li>
				<li ><a href="index.html">Logout</a></li>
				<li><input type="text" id="search" value="search.."/></li>
			</ul>
			
		</div>

		<div id="page">

			<div class="contents">
				<div id="juduldanedit">
					<div id="header">
						<h2>Tubes IMK Flash</h2>
					</div>
					<div id="tomboledit">
						<a id="login" href="edittask.html">Edit Task</a>
					</div>
				</div>
				
				<table class="rinciantask">
				<tr>
					<th>Attachment: </th>
					<td><img src="images/imk.jpg" alt="Img" />
					<p><a href="callforIntern.pdf">TugasImk</a></p></td>
				</tr>
				<tr>
					<th>Deadline: </th>
					<td>23 Februari 2013</td>
				</tr>
				<tr>
					<th>Asignee: </th>
					<td>
						Dwitri Desvira</br>
						Gabrielle Wicesawati</br>
						Agnes Theresia
					</td>
				</tr>
				<tr>
					<th>Tag: </th>
					<td>ngeselin</td>
				</tr>
				<tr>
					<th></th>
					<td>
						<div class="input_komen">
							<h4>Post a Comment</h4>
							<textarea id="text_com" name="komentar" rows="5" cols="40"></textarea><br />
							<input id="button_com" type="button" name="submit" value="send" onclick="addComment()"/><br />
						<hr />
						</div>
						<div class="header_komen">
							<h4>Comments</h4>
							<hr />
						</div>
						<div class="komen" id="komen">
							<div class="text">
								<h5>Wee.. susah euy tugasnya</h5>
							</div>
							<div class="user">
								<p>Commented by Gabrielle at 15/2/13 10:06</p>
							</div>
							<div class="garis">
								<hr />
							</div>
							<div class="text">
								<h5>Tugas gini kecillah..</h5>
							</div>
							<div class="user">
								<p>Commented by Dwitri at 14/2/13 15:36</p>
							</div>
							<div class="garis">
								<hr />
							</div>
							<div class="text">
								<h5>Ayo kita kerjakan! cup cup muaah</h5>
							</div>
							<div class="user">
								<p>Commented by Agnes at 14/2/13 08:45</p>
							</div>
							<div class="garis">
								<hr />
							</div>
						</div>
					
					</td>
				</tr>
				</table>
				
			</div>
		</div>
		
	</body>
</html>
