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
          $allPosts = newspostService::showAllPosts();
          foreach ($allPosts as $post)
            {
            ?>
            <div class="item">
              <h1><?php print $post->titel; ?></h1>
              <div class="itemtext">
                <p><?php print $post->inhoud; ?></p>
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
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="footer">
        <?php include("locked/footer.php"); ?>
      </div> 
    </div>
  </body>
</html>
