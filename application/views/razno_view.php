<div class="span9 tekst">
			<div class="row-fluid upper10">
				<div class="span9">
					<?php
if(!isset($razno)){?>  
<p>Nema nista rodjace</p>
  <?php
}else{ 

	?>
<div class="emisija">
					<h3><?echo $razno['naslov'];?></h3>
					<p><?echo $razno['sadrzaj'];?></p>
					</div>
	<?php
  
  }
    ?>          
				</div>