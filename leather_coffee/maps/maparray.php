<?php // array for maps

// maparray.php - WON'T COMPILE ON IT'S OWN

// Define locations and add markers with attached info windows.

$locations = array(
    array(49.000476, -123.067929, '#FF7B6F'),
    array(48.993952, -123.084274, '#6BE337'), 
    array(48.987419, -123.068014, '#E6E325'), 
    array(48.972392, -123.083812, '#61A1FF'), 
    array(48.975989, -123.029729, '#FF61E3')
);

foreach ($locations as $i => $location) {
    $map->addMarker($location[0], $location[1], array(
        
        'defColor' => $location[2], 
        'defSymbol' => ($i + 1), 
        'infoCloseOthers' => true
    ));
}







?>

