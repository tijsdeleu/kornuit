<!DOCTYPE html>
<html>
  <?php include("locked/head.php"); ?>
  <body>
    <div class="container">
      <div class="header">
      </div>
      <?php
      include 'locked/mainmenu.php';
      ?>
      <div class="page">
        <div class="sidebar1">
          <?php
          include 'locked/login.php';
          ?>
          <?php include("locked/latestposts.php"); ?>
        </div>
        <div class="content">
          <div class="item">
            <h1>Galerij</h1>
            <div class="itemtext">
              <ul>
                <?php
                $arrCategories = galerijService::getAllCategories();
                $aantal = count($arrCategories);
                $randomalbum = rand(1, $aantal);
                $teller = 1;
                foreach ($arrCategories as $categorie)
                  {
                  if ($randomalbum == $teller)
                  {
                    $randomcat = $categorie;
                  }
                  $teller = $teller + 1;
                  ?>
                  <li><a href="index.php?page=galerij&album=<?php print $categorie; ?>"><?php print $categorie; ?></a></li>
                  <?php
                  }
                ?>
              </ul>
            </div>
          </div>
          <?php
          if (!isset($_GET['album']))
          {
            ?>
            <div class="item">
              <h1><?php print $randomcat ?></h1>
              <div class="itemtext">
                <?php
                $arrImages = galerijService::getAllImagesFromCategorie($randomcat);
                if (!empty($arrImages))
                {
                  foreach ($arrImages as $img)
                    {
                    ?>
                    <a href="<?php print $img ?>" data-lightbox="<?php print $categorie ?>"><div class="galerijimg" style="background-image: url('<?php print $img ?>')"></div></a>
                    <?php
                    }
                }
                ?>
                <div class="clearfix"></div>
              </div>
            </div>
            <?php
          }
          ?>
          <?php
          if (isset($_GET['album']))
          {
            ?>
            <div class="item">
              <h1><?php print $_GET['album'] ?></h1>
              <div class="itemtext">
                <?php
                $arrImages = galerijService::getAllImagesFromCategorie($_GET['album']);
                if (!empty($arrImages))
                {
                  foreach ($arrImages as $img)
                    {
                    ?>
                    <a href="<?php print $img ?>" data-lightbox="<?php print $categorie ?>"><div class="galerijimg" style="background-image: url('<?php print $img ?>')"></div></a>
                    <?php
                    }
                }
                ?>
                <div class="clearfix"></div>
              </div>
            </div>
            <?php
          }
          ?>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="footer">
        <?php include("locked/footer.php"); ?>
      </div> 
    </div>
    <?php include ("locked/script.php"); ?>

  </body>
</html>
