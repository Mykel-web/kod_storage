<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />

  <title> Prześlij plik</title>
</head>

<body>
  <form enctype="multipart/form-data" action="wyslij.php" method="POST">
    <input type="hidden" name="maxRozmiar" value="1048576" />
    <p>wyślij plik &nbsp;
      <input type="file" name="plik" size="50" />
    </p>
    <p> <input type="submit" value="Wyslij" name="wyslij" /></p>
  </form>

</body>

</html>