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
            <h1>Inschrijven</h1>
            <?php
            if (!isset($id) || $id == 0)
            {
              ?>
              <p>Hier kunt u uw gezin inschrijven in kornuit. Erna kunt u kinderen inschrijven via uw controle paneel.</p>
              <p>De logingegevens worden, na het invullen van het formulier, gemaild naar het emailadres die u ingeeft bij 'EMAIL 1'?</p>
              <h2>Organisator:</h2>
              <ul>
                <li>Naam: <b>KORNUIT vzw</b></li>
                <li>Adres: <b>Zwevezelestraat 14, 8820 Torhout</b></li>
                <li>Ondernemingsnummer: <b>465 639 689</b></li>
              </ul> 
              <form class="inschrijvingsform" method="post" action="<?php echo htmlspecialchars("inschrijven.php?page=gezin"); ?>">
                <label for="formgezin_naam" class="required">Naam gezin*:</label>
                <?php
                if (isset($errNaam))
                {
                  print '<span>' . $errNaam . '</span>';
                }
                ?>
                <input type="text" id="formgezin_naam" name="naam" required="required" />
                <h2>Domicilieadres:</h2>
                <label for="formgezin_domicilieadres" class="required">Adres*:</label>
                <input type="text" id="formgezin_domicilieadres" name="domicilieadres" required="required" />
                <label for="formgezin_domiciliepostcode" class="required">Postcode*:</label>
                <input type="text" id="formgezin_domiciliepostcode" name="domiciliepostcode" required="required" />
                <label for="formgezin_domiciliegemeente" class="required">Gemeente*:</label>
                <input type="text" id="formgezin_domicilieadres" name="domiciliegemeente" required="required" />
                <h2>Verblijfsadres:</h2>
                <label for="formgezin_verblijfsadres" class="required">Adres*:</label>
                <input type="text" id="formgezin_verblijfsadres" name="verblijf[0][0]" required="required" />
                <label for="formgezin_verblijfpostcode" class="required">Postcode*:</label>
                <input type="text" id="formgezin_verblijfpostcode" name="verblijf[0][1]" required="required" />
                <label for="formgezin_verblijfsgemeente" class="required">Gemeente*:</label>
                <input type="text" id="formgezin_verblijfsgemeente" name="verblijf[0][2]" required="required" />
                <div class="input_fields_wrap">
                  <button class="add_field_button">Voeg adres toe</button>
                </div>
                <h2>Contactgegevens:</h2>
                <label for="formgezin_email1" class="required">Email 1*:</label>
                <input type="email" id="formgezin_email1" name="email1" required="required" />
                <label for="formgezin_email2">Email 2:</label>
                <input type="email" id="formgezin_email2" name="email2" />
                <label for="formgezin_gsm">Gsm/Telefoon nummer:</label>
                <input type="tel" id="formgezin_gsm" name="gsm" />
                <label for="formgezin_telefoon">Nummer noodgevallen:</label>
                <input type="tel" id="formgezin_telefoon" name="telefoon" />
                <button type="submit" id="formgezin_bevestig" name="formgezin[bevestig]">Inschrijven</button>
                <input type="hidden" id="formgezin__token" name="formgezin[_token]" value="Fvtr4daxxT70beFq8USPopaqHuE3yAxPOjJH-kdjN-w" />
              </form>
              <?php
            }
            if (isset($id) && $id > 0)
            {
              ?>
              <p>Bedankt om u in te schrijven. Uw gegevens zijn doorgemailt naar het volgende emailadres:</p>
              <ul>
                <li>
                  <?php
                  if (isset($_POST["email1"]))
                  {
                    print $_POST["email1"];
                  }
                  ?>
                </li>
                <li><?php print $username ?></li>
                <li><?php print $wachtwoord ?></li>

              </ul>
              <?php
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
