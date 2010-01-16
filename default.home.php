
<div id="main">

<div class="header">
  <img src="http://www.gravatar.com/avatar/<?php echo md5($GLOBALS['USER_CONTROL']['email']); ?>.jpg?s=32" alt="" />
  <h1>Home</h1>

  <form id="update" method="post" action="/api/micro/update.json?ref=%2F">
  <div class="f">
  <?php

  ?>
    <textarea name="message" id="message"></textarea>
    <br />
    <input type="submit" value="Update" />
  </div>
  </form>
</div>

<ul id="updates">
<?php

  KronCore::friendTimeline();

  while( KronCore::next() )
  {
    ?>
    
    <li class="update">
    <?php echo KronCore::content(); ?>

    </li>
    <?php
  }

?>
</ul>

<div class="relations">
<?php
  
  NuEvent::hook('kron_social_following', 'default_userlist');
  NuEvent::hook('kron_social_followers', 'default_userlist');

  KronSocial::following();
  KronSocial::followers();

?>
</div>

</div>
