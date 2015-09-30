<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/layout.css">
    <meta charset="UTF-8">
    <title>nieuwe post</title>
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
          <div class="item">
            <h1>ontwerp nieuwe post</h1>
            <div class="itemtext" id="nieuwepost">
              <form name="addpost" method="post" action="index.php">
                <label for="addpost_titel" class="required">titel</label>
                <input type="text" id="addpost_titel" name="titel" required="required" />
                <label for="addpost_inhoud" class="required">inhoud</label>
                <textarea id="addpost_inhoud" name="inhoud" required="required"></textarea>
                <button type="submit" id="addpost_bevestig" name="addpost[bevestig]">bevestig</button>
            <input type="hidden" id="addpost__token" name="addpost[_token]" value="Fvtr4daxxT70beFq8USPopaqHuE3yAxPOjJH-kdjN-w" />
            </div>
          </div>
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
