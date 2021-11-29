<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>



<h1>Registration Form</h1>
</head>
<body>

<hr>
<p id ="error"></p>
<form action="" method ="post" onsubmit="return validateForm()">
<script type="text/javascript" src="../js/myjs.js">

</script>

<table>

<tr>
<td>First Name:</td>
<td><input type="text" name="fname" id =fname> </td>

</tr>
<tr>
<td>Last Name:</td>
<td><input type="text" name="lname" id="lname"> </td>

</tr>
<tr>
<td>Age:</td>
<td><input type="number" name="age" id ="age"> </td>

</tr>



<tr>
<td>Designation:</td>
<td>
<input type="radio" name="designation"id="designation1" value="junior">
Junior Programmer

<input type="radio" name="designation" id="designation2" value="senior">
Senior Programmer



<input type="radio" name="designation" id="designation3" value="lead">
Project Lead



</td>
</tr>
<tr>
<td>



Preferred language




</td>
<td>
<br><input type="checkbox" name="language1" id="languag1" value="JAVA">
JAVA
<input type="checkbox" name="language2" id="language2" value="PHP">
PHP
<input type="checkbox" name="language3" id="language3" value="C++">
C++
<br>

<br>

</td>



</tr>



<tr>
<td>Email:</td>
<td><input type="email" name="email" id ="email"> </td>
</tr>
<tr>
<td>Password:</td>
<td><input type="Password" name="password" id="password"> </td>
</tr>



<tr>
<td>
please choose a file:
</td>
<td><input type="file" name="file" id ="file"></td>
</tr>
<br>
</table>
<input type="submit" value="submit">
<input type="reset" name="reset">
</form>
<p id ="a"></p>
<p id ="b"></p>
<p id ="c"></p>
<p id ="d"></p>

 <p id ="e"></p>
 <p id ="f"></p>

</hr>





</body>
</html>