<body>
<div><a href="/kronblr"><img src="/themes/custom/blogbanner.png" class="banner" alt="banner" /></a></div>
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
<div class="footer">&copy; 2009-2010 James M. All rights reserved.<br />Powered by <a href="http://github.com/RyanAltman/kronblr">Kronblr</a> and Nuclear.<br /> <br /> <a href="http://validator.w3.org/check?uri=referer">Valid XHTML</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">Valid CSS</a> | <a href="http://apple.com/mac">Made on a Mac</a></div>
</body>
</html>
