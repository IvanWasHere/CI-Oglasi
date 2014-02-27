	<div class="span5 banner">
                      <?php
if(!isset($reklame)){?>  
<p>Nema nista rodjace</p>
  <?php
}else{ 
foreach($reklame as $row){
  ?>
<div>
            <a href="<?echo $row['link'];?>">
              <img src="<?php echo base_url()?><?echo $row['slika'];?>"/>
            </a>
          </div>
  <?php
    }
  }
    ?>
		</div>  </div>
