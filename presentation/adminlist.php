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
          <div class="contentitle"><h1>adminlist</h1></div>
          <div class="item">
            <div class="itemtext">
              <table>
                <tr>
                  <th>id</th>
                  <th>username</th>
                  <th>email</th>
                  <th>actie</th>
                </tr>
                <?php
                $users = userService::getAllUsers();
                foreach ($users as $user)
                  {
                  ?>
                  <tr>
                    <td><?php print $user->id ?></td>
                    <td><?php print $user->username ?></td>
                    <td><?php print $user->email ?></td>
                    <?php
                    if ($user->admin == 1)
                    {
                      ?>
                    
                    <td><a href="">maak admin</a></td>
                      <?php
                    }
                    if ($user->admin == 2)
                    {
                      ?>
                    <td><a href="">verwijder admin</a></td>
                    <?php
                    }
                    ?>
                  </tr>
                  <?php
                  }
                ?>
              </table>
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
