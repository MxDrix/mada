<?php include "nav.php"?>
<div id="DivG">
	<table style="width:100%">
	<tr>
		<?php include"tdOnglet.php"?>
		<td  id="tdcontenu">
			
			<div id="Page">  
                            <center><H3 id="h3">Contact </H3></center>
                            <center>
                                <img src="images/page-contact/contact_2.png" style="width:600px;"/>
                            </center>                         
                            <div style="table">
                                <div style="display:table-cell">  
                                    <p id="pG">Adresse : 49, rue de la Cavée - 95100 Argenteuil</p>
                                    <p id="pG">Tel : 06.63.86.00.46 ou 06.99.27.30.59</p>
                                    <p id="pG">E.mail : contact.madamiza@gmail.com</p>
                                </div>
                                <div style="display:table-cell;width:50%;">
                                    <center> <h2>Formulaire de contact</h2></center>

                        <div  class="info"><?php

                    $your_email ='';// <<=== update to your email address
                    $errors = '';
                    $name = '';
                    $visitor_email = '';
                    $user_message = '';

                    if(isset($_POST['submit']))
                    {

                            $name = $_POST['name'];
                            $visitor_email = $_POST['email'];
                            $user_message = $_POST['message'];
                            ///------------Do Validations-------------
                            if(empty($name)||empty($visitor_email))
                            {
                                    $errors .= "<center id='errCont'> Merci d'entrer votre nom et votre adresse email. </center>";	
                            }
                            if(IsInjected($visitor_email))
                            {
                                    $errors .= "<center id='errCont'> Indiquer une adresse email valide! </center>";
                            }
                            if(empty($_SESSION['6_letters_code'] ) ||
                              strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
                            {
                            //Note: the captcha code is compared case insensitively.
                            //if you want case sensitive match, update the check above to
                            // strcmp()
                                    $errors .= "<center id='errCont'> Erreur dans la saisie du captcha !</center>";
                            }

                            if(empty($errors))
                            {
                                    //send the email
                                    $to = $your_email;
                                    $subject="PorteFolio contact";
                                    $from = $visitor_email;
                                    $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';

                                    $body = "Message envoy� depuis http://madamiza.org :\n".
                                    "Nom : $name\n".
                                    "Email : $visitor_email \n".
                                    "Message : \n ".
                                    "$user_message\n".
                                    "IP: $ip\n";	

                                    $headers = "From: $from \r\n";
                                    $headers .= "Reply-To: $visitor_email \r\n";

                                    mail($to, $subject, $body,$headers);

                                    header('Location: contact.php');
                            }
                    }

                    // Function to validate against any email injection attempts
                    function IsInjected($str)
                    {
                      $injections = array('(\n+)',
                                  '(\r+)',
                                  '(\t+)',
                                  '(%0A+)',
                                  '(%0D+)',
                                  '(%08+)',
                                  '(%09+)'
                                  );
                      $inject = join('|', $injections);
                      $inject = "/$inject/i";
                      if(preg_match($inject,$str))
                        {
                        return true;
                      }
                      else
                        {
                        return false;
                      }
                    }
                    ?>

                    <?php
                    if(!empty($errors)){
                    echo "<p class='err'>".nl2br($errors)."</p>";
                    }
                    ?>
                    <div id='contact_form_errorloc' class='err'></div>
                    <form method="POST" id="formContact" name="contact_form"  action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"> 
                        <p>
                            <label id="lblContact" style="min-width: 200px;" for='name'>Votre nom : </label>
                            <input type="text" name="name" placeholder="Nom" style="width:30%;color: rgba(0,0,0,.8);" value='<?php echo htmlentities($name) ?>'>
                        </p>
                        <p>
                            <label id="lblContact"  style="min-width: 200px;" for='email'>Votre email : </label>
                            <input type="text" placeholder="Email" name="email" style="width:30%;color: rgba(0,0,0,.8);" value='<?php echo htmlentities($visitor_email) ?>'>
                        </p>
                        <p>
                            <label id="lblContact" for='message'>Message :</label>
                            <textarea  placeholder="Votre message" name="message" rows=8 style="width:90%;color: rgba(0,0,0,.8);"><?php echo htmlentities($user_message) ?></textarea>
                        </p>
                        <center> <img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg'><br/>
                            <label id="lblContact" for='message'> Entrez le m&ecircme captcha :</label><br/>
                            <input id="6_letters_code" name="6_letters_code" type="text"><br/>
                            <small>Vous ne pouvez pas lire l'image ? cliquez <a id="aContact" href='javascript: refreshCaptcha();'>ici</a> pour rafraichir</small>
                        </center>
                        <br/>
                        <center>
                            <input type="submit" value="Envoyer" name='submit'>
                        </center>
                    </form>
                    </div>
                    <script language="JavaScript">
                    // Code for validating the form
                    // Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
                    // for details
                    var frmvalidator  = new Validator("contact_form");
                    //remove the following two lines if you like error message box popups
                    frmvalidator.EnableOnPageErrorDisplaySingleBox();
                    frmvalidator.EnableMsgsTogether();

                    frmvalidator.addValidation("name","req","Please provide your name"); 
                    frmvalidator.addValidation("email","req","Please provide your email"); 
                    frmvalidator.addValidation("email","email","Please enter a valid email address"); 
                    </script>
                    <script language='JavaScript' type='text/javascript'>
                    function refreshCaptcha()
                    {
                            var img = document.images['captchaimg'];
                            img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
                    }
                    </script>
                </div>
			</div>
                    </div>        
		</td>
		<?php include"tdMultimedia.php"?>
	</tr>	
	</table>
</div>
<?php include "footer.php"?>