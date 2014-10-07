<?php
$xml = simplexml_load_file('https://gdata.youtube.com/feeds/api/playlists/PLo55pWGTS0ofwpZv4DsSYoUYY-0pr6FFV');
foreach ($xml->entry as $video){
	$link = (array) $video->link;
	$href = $link['@attributes']['href'];
	parse_str(parse_url($href, PHP_URL_QUERY));	
	// print_r($video); no thumbnail image.. :(
	echo($video->title.": ".$v."
");
}
?>