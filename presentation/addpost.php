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
            <h1>ontwerp nieuwe post</h1>
            <div class="itemtext" id="nieuwepost">
              <form name="addpost" method="post" action="index.php">
                <label for="addpost_titel" class="required">titel</label>
                <input type="text" id="addpost_titel" name="titel" required="required" />
                <label for="addpost_inhoud" class="required">inhoud</label>
                <textarea id="addpost_inhoud" name="inhoud" required="required"></textarea>
                <button type="submit" id="addpost_bevestig" name="addpost[bevestig]">bevestig</button>
                <input type="hidden" id="addpost__token" name="addpost[_token]" value="Fvtr4daxxT70beFq8USPopaqHuE3yAxPOjJH-kdjN-w" />
              </form>
              <div class="addpostuitleg">
                <p>Hieronder vindt u een legende voor de opmaak van uw post:</p>
                <ul>
                  <li>&lt;b&gt;<b>gebruik deze tags voor vette tekst</b>&lt/b&gt;</li>
                  <li>&lt;i&gt;<i>gebruik deze tags voor cursieve tekst</i>&lt/i&gt;</li>
                  <li>&lt;u&gt;<u>onderlijnen</u>&lt;/u&gt;</li>
                </ul>
              </div>
              <div class="clearfix"></div>
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
