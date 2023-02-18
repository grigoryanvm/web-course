<?php

$servername = "localhost";
$username = "Nikatin";
$password = "111";
$dbname = "bazal";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$sql="INSERT INTO pupil (id, Firstname, Lastname, Groupe) VALUES ('', 'Григорян', 'Ffff', 'ИСП-205')";
    $sql="SELECT book.NameBook, 
COUNT(author.Id_auth) as count_authors 
FROM book
INNER JOIN 'object' USING(book_id) 
INNER JOIN author USING(Id_auth) 
GROUP BY(book.NameBook) HAVING count_authors <= 3 
ORDER BY count_authors)";
 $conn->exec($sql);
 echo "Успешно";
} catch(PDOException $e) {
 echo $sql . "<br>" . $e->getMessage();
}
$conn = null;


?>