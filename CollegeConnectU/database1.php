<?php
 
					$host = "localhost";
					$dbusername = "aninda20_aninda";
					$dbpassword = "aninda";
					$dbname = "aninda20_feedback";
 
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
 
if(mysqli_connect_error()){
						die('Connect Error ('.mysqli_connect_errno().')' .mysqli_connect_errno());
					}else{
						echo' Thankyou for providing feedback to BvcoeConnectU! @aninda
						<a href="index.html"><p>Go to homepage<p></a>
						'
						;
					}
 
?>