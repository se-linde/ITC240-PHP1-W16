<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?> 

<h2>Today's Fun Fact about Spinifex, Australia's Most Brutal Grass: </h2>
<br>
    
<?php
    
if(isset($_GET['day'])) // The form handler.
{ // show data.
    
    switch($_GET['day']){ 

        case 'Saturday':
        $day = 'Spinifex (Triodia species) is a tough, spiky tussock grass that dominates much of the red sand desert and rocky ranges of Central Australia.'; 
        break;

        case 'Sunday':
        $day = "Spinifex thrives on the poorest, most arid soils Australia has to offer. It is Spinifex that has prevented our deserts from becoming a Sahara-like world of bare, shifting sand."; 
        break;
                
            case 'Monday':
        $day = "Spinifex roots go down a long way: approximately 3 metres. Generally the roots develop from the same nodes as the shoots so that each shoot has its own personal water supply. The spiky leaves contain a lot of silica which makes them stiff and rigid."; 
        break;
            
            case 'Tuesday':
        $day = "Spinifex is tough and indigestible to most animals except termites. These tiny grazers thrive on the Spinifex litter.  A grass that’s very poor in nitrogen and phosphorus poses no problems for them."; 
        break;
            
            case 'Wednesday':
        $day = "Some species of Spinifex dominate the sand country of Central Australia. Other species are found on the stony hills and ranges."; 
        break;
            
            case 'Thursday':
        $day = "Spinifex seeds are produced after exceptional rainfall events. The seed is an important source of food for many desert birds and rodents."; 
        break;
            
            case 'Friday':
        $day = "In areas long unburnt, rings of Spinifex join up, crowding out shorter-lived plants. Fire burns even green Spinifex and promotes the germination of a wide variety of shorter-lived plants, part of a cycle of burning and regrowth."; 
        break;
            
        default:
        
        $day = "When the spinifex hit Sydney, it was the last thing we expected - Midnight Oil."; 
    }
    
    
} else { // show form.
    echo '
    <form action = "ourwork.php">
    What is the day of the week?: <input type = "text" name = "day" /><br />
    <input type = "submit" />
    </form>
    ';
}

?>

<p><?=$day?></p>




<?php include 'includes/footer.php';?> 
    
