<!DOCTYPE html>
<html>
  <?php include("/../locked/head.php"); ?>
  <body>
    <div class="container">

      <div class="header">
      </div>
      <?php
      include '/../locked/mainmenu.php';
      ?>
      <div class="page">
        <div class="sidebar1">
          <?php
          include '/../locked/login.php';
          ?>
          <?php include("/../locked/latestposts.php"); ?>
        </div>
        <div class="content">
          <div class="item">
            <h1>Kind Inschrijven</h1>
            <p>Hier kunt u uw kind inschrijven.</p>

            <?php
            if (!isset($_GET['opvang']))
            {
              ?>
              <p>Kies hieronder voor welke opvang uw kind moet worden ingeschreven.</p>
              <ul>
                <li>- <a href="inschrijven.php?page=kind&opvang=ibo">Buitenschoolse Opvang / Middagopvang</a></li>
                <li>- <a href="inschrijven.php?page=kind&opvang=kdv">kinderdagverblijf</a></li>
              </ul>
              <?php
            }
            if (isset($_GET['opvang']) && $_GET['opvang'] == 'ibo')
            {
              ?>
              <h2>IBO</h2>
              <?php
              include('kindformIBO.php');
            }
            if (isset($_GET['opvang']) && $_GET['opvang'] == 'kdv')
            {
              ?>
              <h2>Kinderdagverblijf</h2>
              <?php
              include('kindformKDV.php');
            }
            ?>
          </div>

        </div>
        <div class="clearfix"></div>
      </div>
      <div class="footer">
        <?php include("/../locked/footer.php"); ?>
      </div> 
    </div>
    <?php include ("/../locked/script.php"); ?>
  </body>
</html>
