<?php ob_start(); require_once 'core/init.php';
logged_in_redirect();?>



	<?php include 'header.php'; ?>
    
    <?php  
	if(isset($_GET['success']) ===true && empty($_GET['email_code']) === true) {
	?>
        <center>
        <img src="images/success-01-512.png" width="175" height="175" alt=""/>
        
            <h3>Thanks, we've activated your account</h3>
            
        <h4>Please log in <a href="login.php">here.</a></h4>
        
    </center>	

    <?php
		
	} else if (isset($_GET['email'], $_GET['email_code']) === true) {
				$email         = trim($_GET['email']);
				$email_code    = trim($_GET['email_code']);
				
				if (email_exists($email) === false) {
					$errors[] = 'Oops...., something went wrong, an we couldn\'t find that email address!';
				} else if (activate($email, $email_code) === false) {
						$errors[] = 'We had problems activating your account';
				}
				
				if (empty($errors) === false) {
					?>
                    <center>
<img src="warning.png" width="175" height="154" alt=""/>
<h2>Oops</h2>
</center>
		<?php
			echo output_errors($errors);
				} else {
					header('Location: activate.php?success');
					exit();	
				}
				
		} else {
			header('Location: index.php');
			exit();	
		}
	?>
    
    <br><br><br><br>
    <?php include 'footer.php';?>