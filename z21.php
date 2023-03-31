<?php
$xml = new XMLWriter();
$xml -> openMemory();
$xml-> startDocument();
$xml-> startElement("purchase");
$xml-> startElement("customer"); //покупателя с ID = 1
$xml-> writeElement("id", 1);
$xml-> writeElement("time", "2013–04–19 10:56:03");
$xml-> writeElement("total", "$350");
$xml-> endElement(); // закрытие элемента первого покупателя с ID = 1
$xml-> startElement("customer"); //покупателя с ID = 2
$xml-> writeElement("id", 2);
$xml-> writeElement("time", "2013–04–23 13:43:41");
$xml-> writeElement("total", "$1456");
$xml-> endElement(); // закрытие элемента первого покупателя с ID = 2
$xml-> endElement();
echo $xml-> outputMemory();
?>