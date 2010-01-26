<body>
<div><a href="./"><img src="/themes/custom/blogbanner.png" class="banner" alt="banner" /></a></div>
<div><br /></div>
<div class="content">
<?php

  $driver = KronURI::getInstance();

  if( LocalUser::getInstance() )
  {
    include('default.user.php');
  }
  else if( AuthorizedUser::getInstance() )
  {
    include('default.home.php');
  }
	else
	{
    include('default.notloggedin.php');
    }
?>
</div>
<div><br /></div>
<div class="footer">&copy; 2009-2010 James M. All rights reserved.<br /> <!--Content on this page can be shared as long it complies to the <a href="http://creativecommons.org/licenses/by-nc/3.0/us/">Attribution-Noncommercial 3.0</a> Licence.<br />-->Powered by <a href="http://github.com/RyanAltman/kronblr">Kronblr</a> and Nuclear.<br /> <br /> <a href="http://apple.com/mac">Made on a Mac</a> </div>
</body>
</html>
