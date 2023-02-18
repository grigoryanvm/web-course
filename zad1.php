<?php
echo<<<HTML
<form action="zad1.php" method="post">
<p>«Как вы оцениваете наш магазин?»</p>
<p><input name="mark" type="radio" value="5" checked>Отлично<br>
<input name="mark" type="radio"value="4" checked>Хорошо<br>
<input name="mark" type="radio" value="3"checked>Удовлетворительно<br>
<input name="mark" type="radio"value="2" checked>Плохо<br><br>
<input type="submit" name="sunmit" value="Проголосовать"><br>
HTML;
if ($_POST['mark']){
    
    $file=$_POST['mark'].".txt";
    $f=fopen($file,"r");
    $mark=fread($f,1000);
    fclose($f);
    $mark++;
    $f=fopen($file,"w");
    fwrite($f,$mark);
    fclose($f);}
?>