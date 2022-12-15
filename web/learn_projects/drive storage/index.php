<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Drive</title>
  <link rel="stylesheet" href="index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <?php require_once("connect.php");
  session_start();
  //zalogowany -> strona
  if (isset($_SESSION['log'])) {
    header("location:strona.php");
    exit();
  }
  //próba zalogowania
  else if (isset($_POST['email-l'])) {
    $email = $connect->real_escape_string($_POST['email-l']);
    $password = $connect->real_escape_string($_POST['password-l']);
    $result = $connect->query("SELECT dane.id, dane.haslo FROM dane WHERE email = '$email'");
    if ($result->num_rows > 0) {
      $row = $result->fetch_row();
      if (password_verify($password, $row[1])) {
        $_SESSION['log'] = $row[0];
        header("location:strona.php");
        exit();
      } else {
        $_SESSION['message'] = "Wrong email / password";
      }
    } else {
      $_SESSION['message'] = "Wrong email / password";
    }
    //próba rejestrowania
  } else if (isset($_POST['name'])) {
    $name = $connect->real_escape_string($_POST['name']);
    $surname = $connect->real_escape_string($_POST['surname']);
    $email = $connect->real_escape_string($_POST['email-r']);
    $password = password_hash($connect->real_escape_string($_POST['password-r']), PASSWORD_DEFAULT);
    $result = $connect->query("SELECT email FROM dane WHERE email = '$email'");
    if ($result->num_rows > 0) {
      $_SESSION['message'] = "Email already registered";
    } else {
      $result = $connect->query("INSERT INTO dane (imie, nazwisko, email, haslo) VALUES ('$name','$surname','$email','$password')");
    }
  }
  $connect->close();
  ?>
  <!-- Register -->
  <div class="container-fluid text-nowrap position-relative">
  <div class="position-absolute top-0 start-0 rounded ms-5 mt-5 p-2" id="log-l" style="font-family: cursive;">File drive </div>
    <div class="d-flex pt-5 gap-5 flex-column justify-content-center d-flex align-items-center text-center d-none text-nowrap" id="register">
      <span class="title"><span style="font-family: cursive;">Sign</span><span style="color: green;font-family: cursive;">UP</span></span>
      <form id="register-form" class="col-auto p-4" method="POST" action="index.php">
        <label for="name" class="form-label">Name:</label>
        <input name="name" type="text" class="form-control" id="name" placeholder="Imię">
        <label for="surname" class="form-label">Surname:</label>
        <input name="surname" type="text" class="form-control" id="surname" placeholder="Nazwisko">
        <label for="email-r" class="form-label">E-mail:</label>
        <input name="email-r" type="email" class="form-control" id="email-r" placeholder="email@domena.com">
        <label for="password-r" class="form-label">Password:</label>
        <input name="password-r" type="password" class="form-control" id="password-r" placeholder="8+ characters">
        <label for="password-r2" class="form-label">Repeat password:</label>
        <input type="password" class="form-control" id="password-r2" placeholder="8+ characters">
        <div class="d-flex flex-row mt-4">
          <button type="submit" class="btn btn-success btn-lg">Register</button>
          <button type="button" class="btn btn-warning btn-sm position-absolute bottom-0 end-0 m-4" id="b-login">back to login?</button>
        </div>
      </form>
    </div>
    <!-- Login -->

    <div class="d-flex gap-5 pt-5 flex-column justify-content-center d-flex align-items-center text-center" id="login">
    <span class="title"><span style="font-family: cursive;">Log</span><span style="color: green;font-family: cursive;">IN</span></span>
      <form class="col-auto p-4" method="POST" action="index.php">
        <label for="email-l" class="form-label">E-mail:</label>
        <input name="email-l" type="email" class="form-control" id="email-l" placeholder="email@domena.com">
        <label for="password-l" class="form-label">Password:</label>
        <input name="password-l" type="password" class="form-control" id="password-l" placeholder="haslo123">
        <div class="d-flex flex-row mt-4"><button type="submit" class="btn btn-success btn-lg">Login</button> <button type="button" class="btn btn-warning btn-sm position-absolute bottom-0 end-0 m-4" id="b-register">Register?</button></div>
      </form>
      <?php
      if(isset($_SESSION['message'])){
        echo "<div class='alert alert-danger' role='alert' id='error'>{$_SESSION['message']}</div>";
      }
      unset($_SESSION['message']);
      ?>
    </div>
  </div>
  <script src="index.js"></script>
</body>

</html>