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
          <?php include('locked/login.php'); ?>
          <?php include("locked/latestposts.php"); ?>
          <?php include("locked/randompictures.php"); ?>
        </div>
        <div class="content">
          <?php
          // TOON POSTS
          if (isset($deletewaarschuwing))
          {
            print "<p>" . $deletewaarschuwing . "</p>";
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
                <p><?php print newspostService::make_links_blank($post->inhoud); ?></p>
                <div class="itemimages">
                  <?php
                  $arrArtImg = imageService::getArticleImages($post->id);
                  foreach ($arrArtImg as $artimg)
                    {
                    ?>
                    <a href="<?php print $artimg->url ?>" data-lightbox="<?php print $post->titel ?>"><div class="article_img" style="background-image: url('<?php print $artimg->url ?>')"></div></a>
                    <?php
                    }
                  ?>
                </div>
                <div class="iteminfo clearfix">
                  <p>gepost door: <a href=""><?php print userService::getUserById($post->auteurid)->username ?></a>, op <?php print $post->datum ?>, <a href="index.php?page=viewpost&postid=<?php print $post->id ?>">reacties(<?php print reactieService::getAantalReacties($post->id) ?>)</a></p>
                </div>
              </div>
            </div>
            <?php
            }
          ?>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="footer">
        <?php include("locked/footer.php"); ?>
      </div> 
    </div>
    <?php include ("locked/script.php"); ?>
  </body>
</html>
