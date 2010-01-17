<?php $user = LocalUser::getInstance(); ?>
<div id="main">

<div class="header">
	  <img src="http://www.gravatar.com/avatar/<?php echo md5($user->email); ?>.jpg?s=64" alt="<?php echo $user->name; ?> gravatar" />
  <h1><?php echo $user->name; ?></h1>
</div>


<ul id="updates">
<?php

  KronCore::userTimeline();

  while( KronCore::next() )
  {
    ?>
    
    <li class="update">
    <?php echo KronCore::content();  ?>

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


</div>
