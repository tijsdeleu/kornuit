<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/layout.css">
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <div class="container">
      <?php
      include 'locked/mainmenu.php';
      ?>
      <div class="header">
      </div>
      <div class="page">
        <div class="sidebar1">
          <?php
          include 'locked/login.php';
          ?>
        </div>
        <div class="content">
          <div class="contentitle"><h1>news</h1></div>
          <?php
          // TOON POSTS
          if (isset($deletewaarschuwing))
          {
                  print "<p>".$deletewaarschuwing."</p>";
                  $deletewaarschuwing = "";
           }
          $allPosts = newspostService::showAllPosts();
          foreach ($allPosts as $post)
            {
            ?>
            <div class="item">
              <h1><?php print $post->titel; ?></h1>
              <div class="itemtext">
                <?php
              if (isset($_SESSION['user']) && $_SESSION['user']->admin > 1)
              {
                ?>
                <div class="editpost">
                  <a href="index.php?delete=<?php print $post->id ?>"><img class="delete" src="images/delete.png"></a>
                  <a href="index.php?page=editpost&post=<?php print $post->id ?>"><img class="edit" src="images/edit.png"></a>
                  <a href="index.php?page=addarticleimage&post=<?php print $post->id ?>"><img class="pictureicon" src="images/pictureicon.png"></a>
                </div>
                <?php
              }
              ?>
                <p><?php print $post->inhoud; ?></p>
                <div class="itemimages">
                  <?php 
                  $arrArtImg = imageService::getArticleImages($post->id);
                  foreach($arrArtImg as $artimg)
                    {
                    ?>
                  <img src="<?php print $artimg->url ?>">
                  <?php
                    }
                  ?>
                </div>
                <div class="iteminfo">
                  <p>gepost door: <a href=""><?php print userService::getUserById($post->auteurid)->username ?></a>, op <?php print $post->datum ?>
                </div>
              </div>
            </div>
            <?php
            }
          ?>
        </div>
        <div class="sidebar2">
          <?php include("locked/latestposts.php"); ?>
          <?php include("locked/randompictures.php"); ?>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="footer">
        <?php include("locked/footer.php"); ?>
      </div> 
    </div>
  </body>
</html>
