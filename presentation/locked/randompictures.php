<div class="item" id="randompictures">
  <h1>laatste nieuws</h1>
  <div class="itemtext">
    <ul>
      <?php
      foreach (newspostService::showLatestPosts() as $post)
        {
      ?>
      <li><a href="index.php?page=viewpost?postid=<?php print $post->id ?>">[<?php print substr($post->datum,0,10); ?>] <b><?php print $post->titel; ?></b></a></li>
      <?php
        }
        ?>
    </ul>
  </div>
</div>