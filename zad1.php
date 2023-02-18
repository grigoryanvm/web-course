<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Name</th><th>Price</th><th>About</th><th>Country</th></tr>";

class TableRows extends RecursiveIteratorIterator {
   function __construct($it) {
       parent::__construct($it, self::LEAVES_ONLY);
   }

   function current() {
       return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
   }

   function beginChildren() {
       echo "<tr>";
   }

   function endChildren() {
       echo "</tr>" . "\n";
   }
}
echo <<<HTML
<form action="2.php" method="post">
Название- <input type="text" name="name"><br><br>
Цена- <input type="text" name="price"><br><br>
Описание-<input type="text" name="about"><br><br>

<input type="submit" value="Добавить ">
</form>
HTML;
$servername = "localhost";
$username = "Nikatin";
$password = "111";
$dbname = "bazal";
$name=$_POST['name'];
$price=$_POST['price'];
$about=$_POST['about'];

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //$sql="INSERT INTO pupil (id, Firstname, Lastname, Groupe) VALUES ('', 'Григорян', 'Ffff', 'ИСП-205')";
  $sql="INSERT INTO products(Id, Name, Price, About) VALUES ('', '$name', '$price', '$about')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, Name, Price,About,country,name_c FROM products
    INNER JOIN `country` ON id_c = country");

    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";




?>