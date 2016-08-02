<?php

// Include MapBuilder class.
require_once 'class.MapBuilder.php';

// Create MapBuilder object.
$map = new MapBuilder();

// Set map's center position by latitude and longitude coordinates. 

// These lat and log - centers in Paris, France. 
//$map->setCenter(48.858278, 2.294254);

// This centers in Point Roberts, WA, if this works. 
$map->setCenter(48.988286, -123.067949);

// Display the map.
$map->show();

?>