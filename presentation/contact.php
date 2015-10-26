<?php
if(isset($_POST['contact']))
{
  $to = 'vzwkornuit@gmail.com';
  $from = $_POST['contactmail'];
  $naam = $_POST['contactnaam'];
  $telefoon = $_POST['contacttelefoon'];
  $vraag = $_POST['contactvraag'];
  $inhoud = $naam . ' schreef het volgende (via het contactform op de website): ' . '\n\n' . $vraag;
  mail($to, 'Vraag via contact formulier website', $inhoud);
}
?>
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
            <h1>Contact</h1>
            <div class='itemtext'>
              <ul>
                <li>Verantwoordelijke: <b>Van De Putte Monique</b></li>
                <li>Adres: <b>Zwevezelestraat 14, 8820 Torhout</b></li>
                <li>Telefoonnummer: <b>050 22 32 79</b></li>
                <li>Gsm: <b>0475 47 23 35</b></li>
                <li>Email: <a href="mailto:kornuit@skynet.be">kornuit@skynet.be</a></li>
              </ul>
            </div>
          </div>
          <div class='item'>
            <h1>contactform</h1>
            <div class='itemtext'>
              <form action='' class='inschrijvingsform' method='post'>
                <label for='contact_naam'>Naam:</label>
                <input id='contact_naam' name='contactnaam' type='text' required="required">
                <label for="contact_mail">Email:</label>
                <input id='contact_mail' name='contactmail' type='text' required="required">
                <label for='contact_telefoon'>Telefoon:</label>
                <input id='contact_telefoon' name='contacttelefoon'>
                <label for='contact_vraag'>Uw vraag:</label>
                <textarea style='height:100px; width:300px' id='contact_vraag' name='contactvraag' required='required'></textarea>
                <input type="submit" name="contact" value="Verzenden">
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
