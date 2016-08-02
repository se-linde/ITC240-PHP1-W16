<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?> 


<h3>Contact Us!</h3>	

<?php
if(isset($_POST['Email']))
{ //data sent - send email. 
    /*
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
    ' . XXX . '
    */
    
    $to = "spinifex@gmail.com";
    $subject = "Contact Form from SPINIFEX app.";
    $replyTo = $_POST['Email'];     
    
    $content = '<p><b>Comments:</b></p>
    <p>' . $_POST['Comments'] . '</p>
    ';
    
$response = safeEmail($to, $subject, $content, $replyTo, 'html');

    if($response)
    {
        echo '<p>We will get back to you shortly! http://www.lindese.com/itc240/sandbox/assignments-lc/leather_coffee/contact.php</p><br />';
    }else{
       echo 'Trouble with HTML email!<br />'; 
    }
    
}else{ //show form. 
    echo '
    <form action="contact.php" method="post"> 
    <p>Name: <input type="text" name="Name" /></p>
    <p>Email: <input type="email" name="Email" required /></p>
    <p>Comments: <textarea name="Comments"></textarea>
    <p><input type="submit" value="Contact Us!" /></p>
    </form> 
    '; 
}



?>
<?php include 'includes/footer.php';?> 
    
