<div class="item" id="randompictures">
  <h1>Random pictures</h1>
  <div class="itemtext">
    <?php
    $arrRandomImages = imageService::showRandomPictures(4);
    foreach($arrRandomImages as $image)
      {
      ?>
    <a href="<?php print $image->url ?>" data-lightbox="<?php print 'random';?>"><div class="random" style="background-image: url('<?php print $image->url ?>')"></div></a>
    <?php
      }
    ?>
    <div class="clearfix"></div>
  </div>
</div>

