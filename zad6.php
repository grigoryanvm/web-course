<?php 
if (isset($_POST)) {
    print("Вы заказали - " . $_POST['subject']);
    print("<br> Из материала - " . $_POST['material']);
    print("<br> Количество " . $_POST['count']);
}?>