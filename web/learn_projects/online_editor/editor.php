<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editor.css">
    <title>Online Editor</title>
</head>
<body>
<form action="editor.php" method="POST" id="read">
<input type="number" name="read" id="inputr">
</form>
<div id="kontener">
<span id="tytul"> Online Editor</span>
<div id='tekst'>

<!-- Text area -->
<form action="editor.php" method="POST" id="forma">
<textarea name="text" spellcheck="false" id="txtar"><?php
function read(){
    if(filesize("tekst.txt")>0){
        $plikr = fopen("tekst.txt", "r");
        $tekstr = fread($plikr, filesize("tekst.txt"));
        clearstatcache();
        echo $tekstr;
        fclose($plikr);
    }
    else{
        echo " ";
    }
}
 if(isset($_POST['read'])){
    read();
 }
 else{
    if(isset($_POST['text'])){
        $plikw = fopen("tekst.txt", "w");
        $tekstw = $_POST['text'];
        fwrite($plikw, $tekstw);
        fclose($plikw);
        read();
    }
}
?></textarea>
<!-- END Text area END -->

</form>
</div>

<!-- odczytanie userow -->
<div id="info">
<?php
if(!isset($_COOKIE["plik"])){
    echo "<script>
    document.getElementById('read').action='index.php';
    document.getElementById('read').submit();
    </script>";
}
$names = scandir("users");
$names = array_slice($names,2);
$key = array_search($_COOKIE['plik'],$names);
unset($names[$key]);
$names = array_values($names);
if(isset($names[0])){
for($i=0; $i<sizeof($names); $i++){
        $plikline=file("users/".$names[$i], FILE_IGNORE_NEW_LINES);
        $userline[$i]=$plikline[0]; //array z liniami
        $username[$i]=$names[$i];
        if($plikline[1]<time()-4){
            unlink("users/".$names[$i]); 
        }
        //info
        echo "<span> ".$names[$i]." lane: ".$plikline[0]." date: ".$plikline[1]." "."</span>";
}
}
?>
<script>
var lines = <?php echo $plikline[0] ?>;
var names = <?=json_encode($username)?>;
</script>
<!-- END odczytanie userow -->



</div>
</div>
<script src="editor.js"></script>
<!-- Zapis lini / daty pliku-->
<?php
$plikline= file("users/".$_COOKIE['plik'], FILE_IGNORE_NEW_LINES);
    $plikline[0]=$_COOKIE['linia'];
    $plikline[1]=date('h:i:s', time());
    file_put_contents("users/".$_COOKIE['plik'] , implode( "\n", $plikline ) );
?>
</body>
</html>