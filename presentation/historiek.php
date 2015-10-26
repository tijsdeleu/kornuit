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
            <h1>Historiek</h1>
            <div class="itemtext">
              <p>Kwaliteit & participatie staan 
                reeds 20 jaar centraal binnen de werking van Kornuit.</p>
              <p>We bieden een huiselijke & open sfeer. Betrokkenheid met kinderen en ouders zit diep in de organisatie geworteld.</p>
              <p> Het unieke concept, opvang van 0 tot 12 jaar, is een meerwaarde. Een kind kan zich gedurende 12 jaar hechten, dit zorgt voor een positieve zelfontwikkeling.</p>
              <p>Kornuit is opgericht door Monique Van De Putte op vraag van ouders.</p>
              <p>Ze heeft dit idee gerealiseerd en opende haar Kornuit, een kinderdagverblijf, op één september 1994. 
                In 1999 werd de vzw opgericht. Er kwam ook middagopvang en buitenschoolse opvang bij.</p>
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
