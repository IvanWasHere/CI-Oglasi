<div class="span9 tekst">
			<div class="row-fluid upper10">
				<div class="span9">
					<?php
if(!isset($emisije)){?>  
<p>Nema nista rodjace</p>
  <?php
}else{ 
foreach($emisije as $row){
	?>
<div class="emisija">
<img src="<?php echo base_url()?><?echo $row['slika'];?>"/>
					<h3><?echo $row['naslov'];?></h3>
					<p><?echo $row['sadrzaj'];?></p>
					</div>
	<?php
    }
  }
    ?>          
				</div>