<html>
    <body>
    <?php
$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$add=$_REQUEST["add"];
$gender=$_REQUEST["gender"];
$birth=$_REQUEST["birth"];
$email=$_REQUEST["email"];
$number=$_REQUEST["number"];
$pass=$_REQUEST["pass"];
$cpass=$_REQUEST["cpass"];
echo "Successefully Registered";echo "</br>";
 echo "First name :<h1>$fname</h1>";
 echo "last name"."<h1>$lname</h1>";
 echo "Adress"."<h1>$add</h1>";
 echo "Gender"."<h1>$gender</h1>";
 echo "Birthdate"."<h1>$birth</h1>";
 echo "Email"."<h1>$email</h1>";
 echo "Phone number"."<h1>$number</h1>";
 echo "Password"."<h1>$pass</h1>";




?>
    </body>
</html>