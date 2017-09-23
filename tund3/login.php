<!DOCTYPE html>
<html>
<body>
	<meta charset="utf-8">
	<form action="/info.php">
	<b>Email: <input type="Email" name="email"><br></b>
	<b>Parool: <input type="Password" name="psw"><br><b>
	<input type="submit" value="Logi sisse">
<br>
<br><b>Kas sul pole kasutajat?</b><br> 
 <form action="/action_page.php">
  <div class="container">
    <br><label><b>Eesnimi</b></label>
    <input type="text" placeholder="Sisesta oma eesnimi" name="Eesnimi" required>

    <br><label><b>Perekonnanimi</b></label>
    <input type="text" placeholder="Sisesta oma perenimi" name="Perenimi" required>

	<br><b>Sugu</b>
    <br><input type="radio" name="gender" value="Mees"> Mees<br>
	<input type="radio" name="gender" value="Naine"> Naine<br>
	
	
	<br><label><b>Email</b></label>
    <input type="text" placeholder="Sisesta oma email" name="Email" required>
	
	<br><label><b>Parool</b></label>
    <input type="Password" placeholder="Sisesta oma parool" name="psw" required>
	
    <br><label><b>Korda parooli</b></label>
    <input type="password" placeholder="Parool uuesti" name="psw-repeat" required>
    <br><input type="checkbox" checked="checked"> Maleta mind
    
    <div class="clearfix">
      <button type="submit" class="signupbtn">Loo kasutaja</button>
    </div>
  </div>
</form> 	
	
	
	
	
</body>
</html>

