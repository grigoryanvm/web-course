<?php
// Простой пример
$xml = new XMLWriter(); // создаем новый экземпляр классаXMLWriter
$xml -> openMemory(); // использование памяти для вывода строки
$xml -> startDocument(); // установка версии XML в первом тегедокумента
$xml -> startElement("Customer"); // создание корневого узла
$xml -> writeElement("id", "1");
$xml -> writeElement("name", "Марк"); // запись элемента
$xml -> writeElement("address", "Санкт-Петербург");
$xml -> endElement(); // закрытие корневого элемента
echo $xml -> outputMemory(); // завершение записи в XML
?>