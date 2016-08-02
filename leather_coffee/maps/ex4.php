<?php

// Include MapBuilder class.
require_once 'class.MapBuilder.php';

// Create MapBuilder object.
$map = new MapBuilder();

// Set map's center position by latitude and longitude coordinates. 
// Point Roberts, WA.
$map->setCenter(48.986805, -123.057038);

// Set the default map type.
$map->setMapTypeId(MapBuilder::MAP_TYPE_ID_HYBRID);

// Set width and height of the map.
$map->setSize(860, 550);

// Set default zoom level.
$map->setZoom(14);

// Make zoom control compact.
$map->setZoomControlStyle(MapBuilder::ZOOM_CONTROL_STYLE_SMALL);

// Define locations and add markers with attached info windows.
$locations = array(
    array('US/Canada Border Crossing', 49.000476, -123.067929, '#FF7B6F', 'http://www.lindese.com/itc240/sandbox/assignments-lc/leather_coffee/maps/images/border.jpg', 360, 233),
    array('Point Roberts Country Club', 48.993952, -123.084274, '#6BE337', 'http://www.lindese.com/itc240/sandbox/assignments-lc/leather_coffee/maps/images/golf.jpg', 600, 398), 
    array('Shell Station', 48.987419, -123.068014, '#E6E325', 'http://www.lindese.com/itc240/sandbox/assignments-lc/leather_coffee/maps/images/shell.jpg', 348, 348), 
    array('Lighthouse Marine Park', 48.972392, -123.083812, '#61A1FF', 'http://www.lindese.com/itc240/sandbox/assignments-lc/leather_coffee/maps/images/lighthouse.jpg', 400, 257), 
    array('Lily Point Marine Reserve', 48.975989, -123.029729, '#FF61E3', 'http://www.lindese.com/itc240/sandbox/assignments-lc/leather_coffee/maps/images/lily.jpg', 250, 187)
);
foreach ($locations as $i => $location) {
    $map->addMarker($location[1], $location[2], array(
        'title' => $location[0], 
        'defColor' => $location[3], 
        'defSymbol' => ($i + 1), 
        'html' => '<div><img src="' . $location[4] . '" width="' . $location[5] . '" height="' . $location[6] . '" /></div><b>' . $location[0] . '</b>', 
        'infoCloseOthers' => true
    ));
}

// Display the map.
$map->show();

?>