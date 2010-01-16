<?php
  
  /*
      Micros Theme Control
  */

  class Theme implements MicrosTheme
  {
    public static $xsl;

    public static function name(){ return "Default"; }

    public static function sources(){}

    public static function load()
    {
      $packet_xsl = new DOMDocument('1.0','utf-8');
      $packet_xsl->load( $GLOBALS['THEME'] . '/default.xsl' );
      $xslt = new XSLTProcessor();
      $xslt->registerPHPFunctions();
      $xslt->importStylesheet( $packet_xsl );
      self::$xsl = $xslt;

      Kron::open();

      include( $GLOBALS['THEME'] . '/default.header.php');

      include( $GLOBALS['THEME'] . '/default.body.php');

      Kron::close();
    }
  }

  function default_packet_format( &$p )
  {
    $packxml = $p->xml;
    $packxml->documentElement->setAttribute('current', time());
    $data = Theme::$xsl->transformToXML($packxml);

    $p->append($data);

    return $p;
  }

  function home_packet_format( &$p )
  {
    $packxml = $p->xml;
    $packxml->documentElement->setAttribute('current', time());
    $packxml->documentElement->setAttribute('mode', 'home');
    $data = Theme::$xsl->transformToXML($packxml);

    $p->append($data);

    return $p;
  }

  function default_userlist( &$list )
  {
    $list->addStylesheet( $GLOBALS['THEME'] . '/default.userlist.xsl' );
    echo $list;
  }

  NuEvent::hook('kron_packet_content', "default_packet_format");
  NuEvent::hook('kron_packet_content_home', "home_packet_format");

?>
