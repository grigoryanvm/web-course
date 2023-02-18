<?php 
echo <<<HTML
<h2>Телефонная книга</h2>
<form action="zad2.php" method="post">
Имя  <input name="name", type="text"><br><br>
Номер телефона  <input name="telephone", type="text"><br><br>
Доп.Номер  <input name="mobile", type="text"><br><br>
<input name="submit" type="submit" value="Добавить">

HTML;
$inf="\n Имя: ".$_POST['name']."   Номер телефона: ".$_POST['telephone'].",".$_POST['mobile'];
$f=fopen("tel.txt","a");
fwrite($f,$inf );
echo "<br>";
fclose($f);

?>