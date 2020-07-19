<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->helper('url');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style.css">

</head>

<body>
	<h1>Welcome to QA <?php echo $username ?> </h1>

	<div id="userlistbox">
		<h2>All questions</h2>
		<ul class="userlist">
			<?php foreach ($questions as $qu) {
				echo "<a href=" . base_url() . "index.php/welcome/adashboard?qid=$qu->qid><li>$qu->question</li></a>";
		
			}
			?>
		</ul>
		<form name="adduseraction" action="<?php echo base_url(); ?>index.php/welcome/addqu" method="get">
			<input type="submit" value="Add new question">
		</form>
		<form action="http://localhost/myappp/">
			<input type="submit" value="Log Out">
			</form>
		</form>
		<form action = "http://localhost/myappp/index.php/welcome/dashboard">
			<input type="submit" value= " Users">
		</form>	
	</div>
</body>

</html>