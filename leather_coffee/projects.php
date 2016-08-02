<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?> 


<h3>Questionnaire about Australian Foods and Animals!</h3>


<?php

$toAddress = "spinifex@gmail.com";  
$toName = "ITC 240"; 
$website = "Spinifex Questionnaire";  
#--------------END CONFIG AREA ------------------------#
$sendEmail = TRUE; 
$dateFeedback = true; 
include_once 'includes/config.php';
include 'includes/contact-lib/contact_include.php';
$response = null;
$reCaptcha = new ReCaptcha($secretKey);
if (isset($_POST["g-recaptcha-response"]))
{// if submitted check response
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}
if ($response != null && $response->success)
    {#reCAPTCHA agrees data is valid (PROCESS FORM & SEND EMAIL)
        handle_POST($skipFields,$sendEmail,$toName,$fromAddress,$toAddress,$website,$fromDomain);             
    ?>
    <!-- START HTML FEEDBACK -->
    <div class="contact-feedback">
        <h2>We have recieved your response!</h2>
        <p>Thanks for the input!</p>
        <p>We'll respond within 48 hours, if you requested information.</p>
    </div>    
    <!-- END HTML FEEDBACK -->        
    <?php
}else{#show form, either for first time, or if data not valid per reCAPTCHA 
    if($response != null && !$response->success)
    {
        $feedback = dateFeedback($dateFeedback);
        send_POSTtoJS($skipFields); #function for sending POST data to JS array to reload form elements
    }//end failure feedback
 
?>
	<!-- START HTML FORM -->
	<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
	<div>
		<label>
			Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
		</label>
	</div>
	<div>	
		<label>
			Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
		</label>
	</div>
	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
	<div>	
		<label>
			What is your favorite animal?:<br />
			<select name="What_Is_Your_Favorite_Animal?" required title="Favorite Animal is required" tabindex="30">
				<option value="">Choose your Favorite Animal</option>
				<option value="Rabbit">Rabbit</option>
				<option value="Wallaby">Wallaby</option>
				<option value="Kangaroo">Kangaroo</option>
				<option value="Kiwi">Kiwi</option>
				<option value="Other">Other</option>
			</select>
		</label>
	</div>
	
	<div>	
		<fieldset>
			<legend>What Foods do you Like?</legend>
			<input type="checkbox" name="Foods[]" value="Vegemite" tabindex="40" /> Vegemite <br />
			<input type="checkbox" name="Foods[]" value="Biscuits" /> Biscuits <br />
			<input type="checkbox" name="Foods[]" value="Stew" /> Stew <br />
			<input type="checkbox" name="Foods[]" value="Kiwifruit" /> Kiwifruit <br />
			<input type="checkbox" name="Foods[]" value="Other" /> Other <br />
		</fieldset>
	</div>
	
		<div>	
		<fieldset>
			<legend>Would you like to join our mailing list?</legend>
			<input type="radio" name="Join_Mailing_List?" value="Yes" 
			required="required" title="Mailing list is required" tabindex="50"  
			/> Yes <br />
			<input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
		</fieldset>
	</div>
	<div>	
		<label>
			Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us, thank you!" tabindex="60"></textarea>
		</label>
	</div>	
	<div><?=$feedback?></div>
    <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
	<div>
		<input type="Submit" value="Submit" />
	</div>
    </form>
	<!-- END HTML FORM -->
    <script type="text/javascript"
        src="https://www.google.com/recaptcha/api.js?hl=en">
    </script>
<?php
}
?>




<?php include 'includes/footer.php';?> 
    
