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
$xml2 = new XMLWriter();
$xml2 -> openMemory();
$xml2-> startDocument();
$xml2-> startElement("products");
$xml2-> writeElement("pid", 314);
$xml2-> writeElement("name", "aplle");
$xml2-> writeElement("prise", "$1.00");
$xml2-> endElement();
$xml2-> startElement("products");
$xml2-> writeElement("pid", 315);
$xml2-> writeElement("name", "mango");
$xml2-> writeElement("prise", "$0.90");
$xml2-> endElement();
echo $xml2-> outputMemory();
?>