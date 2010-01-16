<body>
<div><a href="/"><img src="/blogbanner.png" class="banner" alt="banner" /></a></div>
<div><br /></div>
<div class="content">

<?php

  $driver = $GLOBALS['MICROS_URI'];

  if( $driver->static )
  {
    @include("default.{$driver->static}.php");
  }
  else if( $driver->b )
  {
    
  }
  else
  {

  if( $GLOBALS['USER'] )
  {
    include('default.user.php');
  }
  else if( $GLOBALS['USER_CONTROL'] )
  {
    include('default.home.php');
  }
else
{
    include('default.notloggedin.php');
    }
  }
?>
<div class="aligncenter"><?php if( !$GLOBALS['USER_CONTROL'] ) { ?><span>|</span><a href="/forms/account/login.xml">login</a><?php } ?>
<?php if( $GLOBALS['USER_CONTROL'] ) { ?><span>|</span><a href="/account">logout</a><?php } ?></div> </div>
<div><br /></div>
<div class="footer">&copy; 2009-2010 James M. All rights reserved.<br /> <!--Content on this page can be shared as long it complies to the <a href="http://creativecommons.org/licenses/by-nc/3.0/us/">Attribution-Noncommercial 3.0</a> Licence.<br />-->Powered by <a href="http://github.com/RyanAltman/kronblr">Kronblr</a> and Nuclear.<br /><br /><a href="http://chikorita157.notcliche.com/">Anime Blog</a> | <a href="http://twitter.com/chikorita157/">Twitter</a> | <a href="http://melative.com/chikorita157">Melative</a> <br /><a href="http://validator.w3.org/check?uri=referer">Valid XHTML</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">Valid CSS</a> <br /> <a href="http://apple.com/mac"><img src="/madeonamac.gif" alt="Made on a Mac" /></a> </div>
</body>
</html>
