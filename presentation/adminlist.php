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
          <div class="contentitle"><h1>adminlist</h1></div>
          <div class="item">
            <div class="itemtext">
            
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
