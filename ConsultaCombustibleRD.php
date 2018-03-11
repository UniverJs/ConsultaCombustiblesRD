<?php
//iniciamos variables.
$html = "";
$url = "https://micm.gob.do/combustibleRSS.xml";
$xml = simplexml_load_file($url);
/* 
   Puedes hacerlo sin el for para solo mostrar una salida, pero si necesitas colsultar varios 
   SubItems es obligatorio su uso.
*/  
for($i = 0; $i < 1; $i++){
	$title = $xml->channel->item[$i]->title;
	$link = $xml->channel->item[$i]->link;
	$description = $xml->channel->item[$i]->description;
	$pubDate = $xml->channel->item[$i]->pubDate;

/* 
   Poblamos html para el desplegue. Puedes ocupar cualquiera de estos elementos:
<channel>
   <title>
   <link>
   <description>
<item>
   <title>
   <pubDate>
   <description>
   <link>

Para el standar de xml para rss existen otros mas pero no se ocupan en este xml en particular.
*/	
        $html .= "<a href='$link'><h3>$title</h3></a>";
	$html .= "$description";
	$html .= "<br />$pubDate<hr />";
}
// Dar salida.
echo $html;
?>
