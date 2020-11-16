<?php
  session_start();
  include_once 'pdo.php';
  if (isset($_POST['submit'])) {
    // print_r( $_POST);
    echo "post recieved";
    $pass_hash = password_hash($_POST['psw'], PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("INSERT INTO `details`(`usern`, `passwd`) VALUES (:usern,:pswd)");
    $stmt->execute(array(
      ":usern"=>$_POST['username'],
      ':pswd'=>$pass_hash,
    ));

    $_SESSION['succ'] = "Account created successfully.";
    header("Location: index.php");return;

  }
?>




<!DOCTYPE html>
<html>

<style>
  
.container {
  padding-left: 20px;
  padding-bottom: 20px;
  margin: auto;
}


input[type=text], input[type=password] {
  width: 40%;
  padding: "15px";
  margin: 5px 0 22px 0;
  display: block;
  border: none;
  background: #f1f1f1;
  height: 40px;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}


.submitbtn {
  background-color: #0000ff;
  color: white;
  padding: 16px 20px;
  margin: 18 0;
  border: none;
  cursor: pointer;
  width: 40%;
  opacity: 0.9;
}

.submitbtn:hover {
  opacity:1;
}

a {
  color: dodgerblue;
}




</style>
<body>

<h1 style="font-family: Cambria; color: blue; margin-left: 18px; margin-bottom: 0px"> PnC National Bank</h1>
<form method="post" id="form">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>

    <hr>
    <?php
      if (isset($_SESSION['succ'])) {
        echo "<p style='color:green'>" . $_SESSION['succ'] . "</p>";
        unset($_SESSION['succ']);
      }
      if (isset($_SESSION['error'])) {
        echo "<p style='color:red'>" . $_SESSION['error'] . "</p>";
        unset($_SESSION['error']);
      }

    ?>
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <!-- DROPDOWN IMAGE -->

    <br>
    <br>


    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" name="submit" class="submitbtn">Register</button>
  </div>

 
</form>
</body>
</html>