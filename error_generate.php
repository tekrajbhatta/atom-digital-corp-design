
	<?php 

		$Msg = "";
		if(isset($_GET['error']))
		{

			$Msg ="Please fill in the blanks.";
			echo '<div class="alert alert-danger">'.$Msg.'</div>';
		}

	?>
	