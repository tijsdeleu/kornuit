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
          <div class="contentitle"><h1>Historie</h1></div>
          <div class="item">
            <div class="itemtext">
              <p>Kwaliteit & participatie staan 
                reeds 20 jaar centraal binnen de werking van Kornuit.</p>
              <p>We bieden een huiselijke & open sfeer. Betrokkenheid met kinderen en ouders zit diep in de organisatie geworteld.</p>
              <p> Het unieke concept, opvang van 0 tot 12 jaar, is een meerwaarde. Een kind kan zich gedurende 12 jaar hechten, dit zorgt voor een positieve zelfontwikkeling.</p>
            </div>
          </div>
          <div class="item">
            <div class="itemtext">
              <p>Kornuit is opgericht door Monique Van De Putte op vraag van ouders.</p>
              <p>Ze heeft dit idee gerealiseerd en opende haar Kornuit, een kinderdagverblijf, op één september 1994. 
                In 1999 werd de vzw opgericht. Er kwam ook middagopvang en buitenschoolse opvang bij.</p>
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
