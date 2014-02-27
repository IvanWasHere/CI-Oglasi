<div class="span3 banner slikadole">
	<?php
if(!isset($sastrane)){?>  
<p>Nema nista rodjace</p>
  <?php
}else{ 
foreach($sastrane as $row){
  ?>

            <a href="<?echo $row['link'];?>">
              <img src="<?php echo base_url()?><?echo $row['slika'];?>"/>
            </a>
          
  <?php
    }
  }
    ?>
				</div>
			</div>
    </div>
  </div>