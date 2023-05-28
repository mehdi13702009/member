<?php
if(isset($_POST['submit'])){
    header("Location: login.php");
}

?>
<Html>
<head> 
<title>
Registration Page
</title>
</head>
<body bgcolor="Lightskyblue">
<br>
<br>
<form method="post">

<label> Fullname</label>       
<input type="text" name="fullname" size="15"/> <br> <br>
<label> username: </label>   
<input type="text" name="username" size="15"/> <br> <br>
<label> Password: </label>       
<input type="text" name="password" size="15"/> <br> <br>

<input type="submit" name="submit" value="register">

