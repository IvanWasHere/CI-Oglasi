<div class="span9 tekst">
			<div class="row-fluid upper10">
				<div class="span9">
					<?php
if(!isset($vesti)){?>  
<p>Nema nista rodjace</p>
  <?php
}else{ 
foreach($vesti as $row){
	?>
<div class="emisija">
	<? if($row['slika']<>'0'){ ?>
<img src="<?php echo base_url()?><?echo $row['slika'];?>"/>
					<h3><?echo $row['naslov'];?></h3>
					<p><?echo $row['sadrzaj'];?></p>
					</div>
					<?php
    }else{ ?> 
    	<h3><?echo $row['naslov'];?></h3>
					<p><?echo $row['sadrzaj'];?></p>
					</div>
    

	<?php
	}
    }
  }
    ?>          <?=$stranice;?>
				</div>