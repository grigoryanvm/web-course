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
echo $xml -> outputMemory(); // завершение записи в XML;
// Чтение XML формата
$rxml = new XMLReader(); // Создание элемента для чтения
$rxml->xml($nXML); // Загрузка XML, $nXML – строка в формате
// Переместиться к первому элементу customer 
while($rxml->read() && ($rxml->name!== 'Customer'));
$amountSpent = 0;
// Получим значение поля total у второго узла дерева
while($rxml->name === 'Customer') {
// Чтение текущего дочернего через SimpleXMLElement
$node = new SimpleXMLElement($rxml→readOuterXML());
// Проверяем, номер элемента, если он равен 2 то это искомый элемент
if($node->id == 2) {
$amountSpent = $node→total; break;
}
// Переместиться к следующему элементу customer
$rxml->next('Customer');
}
echo $amountSpent;
