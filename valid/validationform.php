<html>
<head>
  
  <link href = "validationstyle.css" type = "text/css" rel= "stylesheet"/>

</head>
<body> 
<h1> This webpage is a basic login form. </h1>
<h2> login form :-</h2>
<form method="post" action="validationprocess.php">  
  Name: <input type="text" name="name">
  <br>
  <br>
  E-mail: <input type="text" name="email">
  <br>
  <br>
  Website: <input type="text" name="website">
  <br>
  <br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br>
  <br>
  <input type="submit" name="submit" value="Submit">  
</form>
</body>
</html>