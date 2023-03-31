<?php
 $doc = new DOMDocument( );
 $ele = $doc->createElement( 'Root' );
 $ele->nodeValue = 'Hello XML World';
 $doc->appendChild( $ele );
 $doc->save("xml.txt");
/*$xml = new DOMDocument();
$xml_album = $xml->createElement("Album");
$xml_track = $xml->writeElement("Track");
$xml -> endElement();
$xml->appendChild( $xml_album );
$xml->save("xml.txt");
*/
$xml = simplexml_load_file("xml.txt") or die('Не удалось создать объект');
  print_r($xml);
?>