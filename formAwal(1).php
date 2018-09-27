<!DOCTYPE html>
<html>
<head>
	<title>Selamat Datang!</title>
</head>
<body>
	<style type="text/css">

	body{
		background-color: #a0e8b9;
		background-repeat: no-repeat;
		background-size: 100%;
	}
		.berjalan{
			position: absolute;
			top: 120px;
			right: 550px;
		}
		.berjalan2{
			position: absolute;
			top: 150px;
			right: 550px;
		}
		.form{
			position: absolute;
			top: 200px;
			right: 480px;
		}
	</style>
	<form action="in.php" method="POST">
	<div class="body"></div>
	<div class="berjalan">
	<marquee behavior="alternate" width="250"><font color="black"><font face="mimich" size="5px">SELAMAT</marquee>
	</div>
	<div class="berjalan2">
	<marquee behavior="alternate" width="200"><font color="black"><font face="mimich" size="5px">DATANG ..</marquee>
	</div>
	<div class="form">
	<table width="405" height="169" border="0" cellpadding="0" cellspacing="0">
		<tr bgcolor="#fcfa74">
			<td height="37" colspan="2">
				<font face="mimich"><font color="black">
				<div align="center">MASUK AKUN</div></td>
			</tr>
			<tr>
				<td width="95" height="32"><font face="mimich"><font color="black">Username</td>
				<td width="304"><label>:
					<input username="username" type="text" id="username" required>
				</label></td>
			</tr>
			<tr>
				<td height="26"><font face="mimich"><font color="black">Password</td>
				<td><label>:
					<input name="password" type="password" id="password" required>
				</label></td>
			</tr>
			<tr>
			<td height="48"></td>
					<td><button class="button6"><a href="in.php" style="text-decoration: none;"><font color="black">Masuk</a></button></td>
			</tr>
			<tr bgcolor="#fcfa74">
				<td height="26" colspan="2"><div align="right"></div></td>
			</tr>
		</form>
		</table>
	</div>
</body>
</html>