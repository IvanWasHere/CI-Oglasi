<div class="row-fluid android">
		<div class="span7">
		<div id="this-carousel-id" class="carousel slide">
        <div class="carousel-inner">
                <?php
if(!isset($sveSlike)){?>  
<p>Nema nista rodjace</p>
  <?php
}else{ 
foreach($sveSlike as $row){
  ?>
<div class="item">
            <a href="<?echo $row['link'];?>">
              <img src="<?php echo base_url()?><?echo $row['slika'];?>"/>
            </a>
           
          </div>
  <?php
    }
  }
    ?>  
          
        </div><!-- .carousel-inner -->
          <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
          <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
      </div><!-- .carousel -->
		</div>
	


	
		