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
          <div class="contentitle">
            <h1>visie</h1>
          </div>
          <div class="item">
            <h1>Klimaat</h1>
            <div class="itemtext">
              <p>In Kornuit streven we naar een open, warme, geborgen, veilige en huiselijke sfeer waarbinnen kinderen zich goed voelen.</p>
            </div>
          </div>
          <div class="item">
            <h1>Ontwikkeling</h1>
            <div class="itemtext">
              <p>We streven ernaar om de kinderen een optimaal pedagogisch klimaat te bieden. Zo ondersteunen we hen in hun ontwikkeling. Een kind moet goed in z'n vel (welbevinden) zitten en moet geboeid kunnen bezig zijn (betrokkenheid). </p>
            </div>
            </div>
          <div class="item">
            <h1>Relaties</h1>
            <div class="itemtext">
              <p>Participatie vinden we heel belangrijk binnen onze opvang. Daarom willen we een vertrouwensrelatie opbouwen met de kinderen en hun ouders (en grootouders). </p>
            </div>
            </div>
          <div class="item">
            <h1>Noden & behoeften</h1>
            <div class="itemtext">
              <p>Het kind en zijn behoeften vormen het vertrekpunt van onze werking. We laten ons inspireren door de visie van Reggio Emilia.</p>
            </div>
            </div>
          <div class="item">
            <h1>Uniek</h1>
            <div class="itemtext">
              <p>Ieder kind is een uniek individu met zijn eigen talenten, kwaliteiten, persoonlijkheid en aanleg. We zorgen ervoor dat kinderen hun talenten kunnen ontplooien.</p>
            </div>
            </div>
          <div class="item">
            <h1>Team</h1>
            <div class="itemtext">
              <p>Togheter Everyone Achieves More - samen kunnen we meer bereiken dan alleen
We verbreden onze kennis door in overleg te gaan met elkaar & door vormingen en bijscholing te volgen. In de dagelijkse werking staat kwaliteit centraal.</p>
            </div>
            </div>
          <div class="item">
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
