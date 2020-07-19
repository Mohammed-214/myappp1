<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->helper('url');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login Page</title>
	<script type="text/javascript">
		function validateForm() {
			if (document.forms['login']['username'].value == "") {
				alert("enter a username");
				return false;
			}
			if (document.forms['login']['password'].value == "") {
				alert("enter a password");
				return false;
			}
		}
	</script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style.css">
</head>

<body>
	<div class="loginbox">
		<h1>Answers</h1>
		<form id="addquform" name="adashboard" action="<?php echo base_url(); ?>index.php/welcome/doaddanswer" method="post" onsubmit="return validateForm()">
			<label for="question">Question</label><br>
            <input type="text" id="qid" name="question" value="<?php echo $quinfo->question ?>"><br>
			<input type="hidden" name="qid" value="<?php echo $quinfo->qid ?>">
		    <label for="answer">Answers</label><br>
            <ul class="userlist">
            <?php foreach ($answers as $answer)
            {
                echo"<a ><li>$answer->answer :$answer->Username</li></a>";
            }
            ?>
            </ul>
			<input type= "text" id="qid" name="answer" value="" required>

			<input type="submit" value="Submit">
		</form>
		<form></form>
		 <form action="http://localhost/myappp/index.php/welcome/dashboardq">
			<input type="submit" value="Cancel" >
			</form>
	</div>
</body>

</html>