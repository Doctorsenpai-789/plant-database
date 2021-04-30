<?php

require_once('store.php');

$mystore->login();

?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plantsdb";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){
    
  $firstName= $_POST['firstname'];
  $lastName= $_POST['lastname'];
  $email= $_POST['email'];
  $password1= $_POST['password1'];
//   $password2= $_POST['password2'];

 

 

  $sql = "INSERT INTO users(first_name,last_name,email,password)
  VALUES ( '$firstName','$lastName','$email','$password1')";

   if ($conn->query($sql) === TRUE) {
        // echo '<script>alert("Account Successfully Created")</script>';
        header("location:login.php");
        
    //  include "menu.php";

   } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
   }
  }
 $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Store | Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
</head>
<style>
  @import url("https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Poppins:400,500&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  user-select: none;
}
.bg-img {
 /* https://images.wallpaperscraft.com/image/laptop_mug_garland_151742_1920x1080.jpg */
  background: url("https://c.stocksy.com/a/tyR400/z9/1060875.jpg");
  height: 100vh;
  background-size: cover;
  background-position: center;
}
.bg-img:after {
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.7);
}
.content {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 999;
  text-align: center;
  padding: 60px 32px;
  width: 370px;
  transform: translate(-50%, -50%);
  background: rgba(255, 255, 255, 0.04);
  box-shadow: -1px 4px 28px 0px rgba(0, 0, 0, 0.75);
}
.content header {
  color: white;
  font-size: 33px;
  font-weight: 600;
  margin: 0 0 35px 0;
  font-family: "Montserrat", sans-serif;
}
.field {
  position: relative;
  height: 45px;
  width: 100%;
  display: flex;
  background: rgba(255, 255, 255, 0.94);
}
.field span {
  color: #222;
  width: 40px;
  line-height: 45px;
}
.field input {
  height: 100%;
  width: 100%;
  background: transparent;
  border: none;
  outline: none;
  color: #222;
  font-size: 16px;
  font-family: "Poppins", sans-serif;
}
.space {
  margin-top: 16px;
}
.show {
  position: absolute;
  right: 13px;
  font-size: 13px;
  font-weight: 700;
  color: #222;
  display: none;
  cursor: pointer;
  font-family: "Montserrat", sans-serif;
}
.pass-key:valid ~ .show {
  display: block;
}
.pass {
  text-align: left;
  margin: 10px 0;
}
.pass a {
  color: white;
  text-decoration: none;
  font-family: "Poppins", sans-serif;
}
.pass:hover a {
  text-decoration: underline;
}
.field input[type="submit"] {
  background: #3498db;
  border: 1px solid #2691d9;
  color: white;
  font-size: 18px;
  letter-spacing: 1px;
  font-weight: 600;
  cursor: pointer;
  font-family: "Montserrat", sans-serif;
}
.field input[type="submit"]:hover {
  background: #2691d9;
}
.login {
  color: white;
  margin: 20px 0;
  font-family: "Poppins", sans-serif;
}
.links {
  display: flex;
  cursor: pointer;
  color: white;
  margin: 0 0 20px 0;
}
.facebook,
.instagram {
  width: 100%;
  height: 45px;
  line-height: 45px;
  margin-left: 10px;
}
.facebook {
  margin-left: 0;
  background: #4267b2;
  border: 1px solid #3e61a8;
}
.instagram {
  background: #e1306c;
  border: 1px solid #df2060;
}
.facebook:hover {
  background: #3e61a8;
}
.instagram:hover {
  background: #df2060;
}
.links i {
  font-size: 17px;
}
i span {
  margin-left: 8px;
  font-weight: 500;
  letter-spacing: 1px;
  font-size: 16px;
  font-family: "Poppins", sans-serif;
}
.signup {
  font-size: 15px;
  color: white;
  font-family: "Poppins", sans-serif;
}
.signup a {
  color: #3498db;
  text-decoration: none;
}
.signup a:hover {
  text-decoration: underline;
}

</style>
<body>
 
    <body>
  <div class="bg-img">
    <div class="content">
      <header>Signup Form</header>
      <form action="" method="POST">
        <div class="field">
          <span class="fa fa-user"></span>
          <input type="text" name ="firstname"  id="firstname" required placeholder="Firstname">
        </div>
        
        <br>
        <div class="field">
          <span class="fa fa-user"></span>
          <input type="text" name ="lastname"  id="lastname" required placeholder="Lastname">
        </div>
        <br>
        <div class="field">
          <span class="fas fa-envelope-square"></span>
          <input type="email" name ="email"  id="email" required placeholder="Email">
        </div>
        <div class="field space">
          <span class="fa fa-lock"></span>
          <input type="password"  name ="password1"  id="password1"  class="pass-key" required placeholder="Password">
          <span class="show">SHOW</span>
        </div>
        <!-- <div class="field space">
          <span class="fa fa-lock"></span>
          <input type="password"  name ="password2"  id="password2"  class="pass-key" required placeholder="Confirm Password">
          <span class="show">SHOW</span>
        </div> -->
        <br>
        <div class="field">
          <input type="submit" name="submit" value="SUBMIT">
        </div>
      </form>
      
    </div>
  </div>
 <script>
   const pass_field = document.querySelector(".pass-key");
const showBtn = document.querySelector(".show");
showBtn.addEventListener("click", function () {
  if (pass_field.type === "password") {
    pass_field.type = "text";
    showBtn.textContent = "HIDE";
    showBtn.style.color = "#3498db";
  } else {
    pass_field.type = "password";
    showBtn.textContent = "SHOW";
    showBtn.style.color = "#222";
  }
});

</script>

</body>
</html>