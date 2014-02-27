<div class="span9 tekst">
			<div class="row-fluid upper10">
				<div class="span9">
					<div class="oglasi vazno">
						<center>MALI OGLASI NA RADIJU</center>
						<center>SMS TEMPO_tekst oglasa poslati na 1201 cena 30din + cena poruke</center>
					</div>
					<div class="oglasi">
						<center>POSLOVNI OGLASI NA RADIJU</center>
						<center>100 din dnevno 30 emitovanja nedeljno</center>
					</div>
					<div class="oglasi">
						<center><a href="<?php echo base_url()?>index.php/oglas/forma_oglasi/"class="btn btn-success btn-large btn-primary" type="button">POŠALJI BESPLATNI INTERNET OGLAS</a></center>
					</div>
					<?php
if(!isset($oglasi)){?>  
<p>Nema nista rodjace</p>
  <?php
}else{ 
foreach($oglasi as $row){
	?>

	<? if($row['placen']<>'1'){ ?>
	<div class="oglasi">
						<div class="info">
							<ul>
								<li>Postavio: <?echo $row['postavio'];?> <?echo $row['datum'];?></li>
								<li>Mesto: <?echo $row['grad'];?></li>
								<li>Telefon: <?echo $row['telefon'];?></li>
								<li>eMail: <?echo $row['email'];?></li>
							</ul>
						</div>
						<p>
							<?echo $row['oglas'];?>
						</p>
					</div>
					<?php
    }else{ ?> 
	<div class="oglasi pro">
						<div class="info">
							<ul>
								<li>Postavio: <?echo $row['postavio'];?> <?echo $row['datum'];?></li>
								<li>Mesto: <?echo $row['grad'];?></li>
								<li>Telefon: <?echo $row['telefon'];?></li>
								<li>eMail: <?echo $row['email'];?></li>
							</ul>
						</div>
						<p>
							<?echo $row['oglas'];?>
						</p>
					</div>
    

	<?php
	}
    }
  }
    ?>          <?=$stranice;?>
				</div>