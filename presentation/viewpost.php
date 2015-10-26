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
          <div class="contentitle">
            <h1>Post</h1>
          </div>
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
                foreach ($arrArtImg as $artimg)
                  {
                  ?>
                  <img src="<?php print $artimg->url ?>">
                  <?php
                  }
                ?>
              </div>
              <div class="iteminfo">
                <p>gepost door: <a href=""><?php print userService::getUserById($post->auteurid)->username ?></a>, op <?php print $post->datum ?>, <a href="">reacties(<?php print reactieService::getAantalReacties($post->id) ?>)</a></p>
              </div>
            </div>
          </div>

          <div class="contentitle">
            <h1>Reacties</h1>
          </div>
          <?php if(isset($_SESSION['user']))
          { ?>
          <div class="item">
            <h1>Plaats reactie</h1>
            <div class="itemtext">
              <div id="nieuwereactie">
                <form name="addreactie" method="post" action="index.php?page=viewpost&postid=<?php print $post->id ?>">
                  <label for="addreactie_inhoud" class="required">Plaats hieronder een reactie:</label>
                  <textarea id="addreactie_inhoud" name="reactieinhoud" required="required"></textarea>
                  <button type="submit" id="addreactie_bevestig" name="addreactie[bevestig]">bevestig</button>
                </form>
              </div>
            </div>
          </div>
          <?php }
          if(!isset($_SESSION['user']))
          {
            ?>
          <a href="locked/latestposts.php"></a>
          <div class="item">
            <h1>Plaats reactie</h1>
          <div class="itemtext">
            <p>Gelieve in te loggen om een reactie te plaatsen.</p>
          </div>
          </div>
          <?php
          }
          ?>
          <?php
          foreach ($arrReacties as $reactie)
            {
            ?>
            <div class="item">
              <h1><?php print userService::getUserById($reactie->auteurid)->username; ?></h1>
              <div class="itemtext">
                <p><?php print $reactie->inhoud ?></p>
                <div class="iteminfo">
                  <p>gepost door: <a href=""><?php print userService::getUserById($reactie->auteurid)->username ?></a>, op <?php print $reactie->datum ?></p>
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
