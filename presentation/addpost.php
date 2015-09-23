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
              <form name="addpost" method="post" action="">
                <label for="form_titel" class="required">titel</label>
                <input type="text" id="form_titel" name="titel" required="required" />
                <label for="form_inhoud" class="required">inhoud</label>
                <textarea id="form_inhoud" name="inhoud" required="required"></textarea>
                <button type="submit" id="form_bevestig" name="form[bevestig]">bevestig</button>
            <input type="hidden" id="form__token" name="form[_token]" value="Fvtr4daxxT70beFq8USPopaqHuE3yAxPOjJH-kdjN-w" />
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
