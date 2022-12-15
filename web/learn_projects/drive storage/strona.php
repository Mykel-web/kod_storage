<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Drive</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="strona.css">
</head>

<body>
  <?php
  require_once("connect.php");
  session_start();
  if (!isset($_SESSION['log'])) {
    header("location:index.php");
    exit();
  }
  // Change data
  if (isset($_POST['name'])) {
    $connect->query("UPDATE dane SET imie = '{$_POST['name']}', nazwisko = '{$_POST['surname']}', telefon = '{$_POST['phone']}'");
    header("location:strona.php");
    exit();
  }
  // User data
  $result = $connect->query("SELECT * FROM dane WHERE id = {$_SESSION['log']}");
  $dane = $result->fetch_row();
  $id = $dane[0];
  if (!file_exists("users/$id")) {
    mkdir("users/$id");
  }
  $directory = "users/$id/";

  // Upload
  if (isset($_POST['f-upload'])) {
    array_filter($_FILES['upload']['name']);
    for ($i = 0; $i < count($_FILES['upload']['name']); $i++) {
      $tmp = $_FILES['upload']['tmp_name'][$i];
      if ($tmp != "") {
        move_uploaded_file($tmp, $directory . $_FILES['upload']['name'][$i]);
      }
    }
  }
  // Delete
  if (isset($_GET['removefile'])) {
    if (file_exists($directory . $_GET['removefile'])) {
      unlink($directory . $_GET['removefile']);
    }
  }
  // Logout
  if (isset($_POST['logout'])) {
    session_destroy();
    header("location:index.php");
    exit();
  }


  $connect->close();
  ?>
  <div class="container-fluid pt-2 d-flex flex-column" id="strona">
    <!-- NAVBAR -->
    <nav class="navbar navbar-dark bg-dark rounded ps-4" id="menu">
      <div class="container-fluid position-relative">
        <div class="d-flex flex-row">
          <div class="col d-flex" id="ja">
            <div class="logo-t1" style="font-family: cursive;"><b>D<span>r</span>i<span>v</span>e</b> </div>
            <span class="d-flex flex-row gap-2 justify-content-center align-items-end ms-4">
              <div class="logo-t2 me-2 mb-4" style="font-family: cursive;"><b>b<span>y</span></b> </div>
              <div class="logo-t3" style="font-family: cursive;"><b>M<span>y</span>k<span>e</span>l</b></div>
            </span>
          </div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"><?php echo "$dane[1] $dane[2]"; ?></h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <form action="strona.php" method="POST">
                  <button type="submit" name="logout" class="btn btn-danger">Logout</button>
                </form><br>
              </li>
              <li class="nav-item">
                Your data:
                <form id="update-form" class="d-flex flex-column gap-2 mt-3" method="POST" action="strona.php">
                  <span>Email</span>
                  <input class="form-control me-2" type="text" value="<?php echo $dane[3]; ?>" aria-label="Disabled input example" disabled name="email">
                  <span>Name</span>
                  <input class="form-control me-2" type="text" value="<?php echo $dane[1]; ?>" name="name">
                  <span>Surname</span>
                  <input class="form-control me-2" type="text" value="<?php echo $dane[2]; ?>" name="surname">
                  <span>Phone Number</span>
                  <input maxlength="11" minlength="9" class="form-control me-2" type="text" value="<?php echo $dane[5]; ?>" name="phone">
                  <button class="btn btn-warning" type="submit">Update</button>
                  <div id="js-error"></div>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- MAIN -->
    <div class="mt-3 d-flex gap-4 flex-column align-items-center">
      <!-- UPLOAD -->
      <div class="col col-5 p-4 text-center d-flex flex-column justify-content-center" id="upload-c">
        <h2>Files upload</h2>

        <form enctype="multipart/form-data" method="POST" action="strona.php" class="d-flex justify-content-center flex-column">
          <input class="form-control mt-3" type="file" name="upload[]" multiple="multiple">
          <button type="submit" class="btn btn-primary mt-4" name="f-upload">Upload</button>
        </form>
      </div>
      <!-- FILES -->
      <div class="container-fluid row">
        <div class="col col-2" id="ad">
          <a href="https://www.newyorker.com/"><img class="img-fluid" src="images/ad2.png" alt="advertisement"></a>
        </div>
        <div class="col-9 d-flex flex-wrap flex-row gap-3" id="pliki">
          <?php
          // File list
          $files = array_diff(scandir($directory), array('.', '..'));
          $files = array_values($files);
          foreach ($files as $file) {
            $path = "users/$id/$file";
            echo "<div class='position-relative p-2 rounded plik mt-2'>
          <a href='$path' download>$file<div class='position-absolute top-0 start-100 translate-middle' style='z-index:5;'><img width='30px' src='images/download.png'></div>
          <img src='images/file.png' class='img-fluid'></a>
          <div id='delete' class='position-absolute bottom-0 start-0'><a href='strona.php?removefile=$file'><img src='images/delete.png' width='50px' class='img-fluid' id='remover'></a></div>
          </div>";
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  <script src="strona.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>