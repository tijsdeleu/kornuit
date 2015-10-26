<div class="item" id="loginform">
  <?php
  if (isset($_POST["formlogin"]))
  {
    $loggeduser = userService::getUserLogin($_POST["username"], $_POST["password"]);
    $_SESSION["user"] = $loggeduser;
  }

  // INDIEN ER GEEN USER IS INGELOGD
  if (!isset($_SESSION['user']))
  {
    ?>
    <h1>login</h1>
    <div class="itemtext">
      <form name="formlogin" method="post" action="<?php echo htmlspecialchars(""); ?>">
        <div id="form"><div>                
            <label for="formlogin_username" class="required">Username</label>
            <input type="text" id="formlogin_username" name="username" required="required" /></div><div>                
            <label for="formlogin_password" class="required">Password</label>
            <input type="password" id="formlogin_password" name="password" required="required" /></div><div>
            <button type="submit" id="formlogin_login" name="formlogin[login]">login</button></div>
          <input type="hidden" id="formlogin__token" name="formlogin[_token]" value="Fvtr4daxxT70beFq8USPopaqHuE3yAxPOjJH-kdjN-w" /></div>
      </form>
      <ul>
        <li>
          <a href="inschrijven.php?page=gezin">Schrijf uw gezin in</a>
        </li>
      </ul>

    </div>
    <?php
  }

  // INDIEN DE USER IS INGELOGD
  if (isset($_SESSION['user']))
  {
    $gezin = gezinService::getGezin($_SESSION['user']->gezinid);
    ?>
    <h1>LOGIN MENU</h1>
    <div class="itemtext">
      <p>Welkom <b><?php print $_SESSION['user']->username; ?></b> (<a href='logout.php'>logout</a>)</p>
      <?php
      // ADMIN LEVEL 1 (gewone user)
      if ($_SESSION['user']->admin == 1)
      {
        if (isset($gezin))
        {
          ?>
          <h2>Gegevens</h2>
          <ul>
            <li>- naam: <b><?php print $gezin->naam; ?></b></li>
            <li>- email 1: <b><?php print $gezin->email1; ?></b></li>
            <li>- email 2: <b><?php print $gezin->email2; ?></b></li>
          </ul>
          <h2>Acties</h2>
          <ul>
            <li>- <a href="">wijzig gegevens</a></li>
            <li>- <a href="inschrijven.php?page=kind">een kind inschrijven</a></li>
            <li>- <a href="">opvangplan</a></li>
          </ul>

          <?php
        }
      }
      // ADMIN LEVEL > 1 (admin)
      if ($_SESSION['user']->admin > 1)
      {
        ?>
        <ul>
          <li>adminmenu:</li>
          <li>- <a href="index.php?page=addpost">maak een nieuwe post</a></li>
          <li>- <a href="index.php?page=adminlist">admin aanduiden/verwijderen</a></li>
        </ul>
        <?php
      }
      ?>
    </div>
    <?php
  }
  ?>
</div>