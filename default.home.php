
<div id="main">

<div class="header">
  <img src="http://www.gravatar.com/avatar/<?php echo md5(AuthorizedUser::getInstance()->email); ?>.jpg?s=32" />
  <h1>Home</h1>
<!--<form id="update" method="post" action="/api/micro/update.json?ref=%2F">--> 
  <form id="update" method="post" action="/api/micro/update.json?ref=%2Fkronblr%2F">
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
<hr />

<div class="relations">
<?php
  
  NuEvent::hook('kron_social_following', 'default_userlist');
  NuEvent::hook('kron_social_followers', 'default_userlist');

  KronSocial::following();
  KronSocial::followers();

?>
</div>
Remember to <a href="./logout">log out</a> if you at a public computer!
</div>
