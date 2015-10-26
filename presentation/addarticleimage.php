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
            <h1>voeg toe aan artikel: <?php print newspostService::getPost($_GET["post"])->titel; ?></h1>
            <div class="itemtext">
              <form action="upload.php" method="post" enctype="multipart/form-data">
                Select image to upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="hidden" name="articleid" value="<?php print $_GET["post"]; ?>">
                <input type="submit" value="Upload Image" name="submit">
              </form>
            </div>
          </div>
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
