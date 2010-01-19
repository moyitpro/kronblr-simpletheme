<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  
  <xsl:output method="xml" omit-xml-declaration="yes" encoding="utf-8" indent="yes" />

  <xsl:template match="/fp">
    <xsl:if test="@mode = 'home'">
      <xsl:element name="a">
      <xsl:attribute name="class">image</xsl:attribute>
      <xsl:attribute name="href"><xsl:call-template name="userlink" /></xsl:attribute>
      <xsl:attribute name="title">
        <xsl:choose>
            <xsl:when test="user/display_name"><xsl:value-of select="user/display_name" /></xsl:when>
            <xsl:otherwise><xsl:value-of select="user/name" /></xsl:otherwise></xsl:choose></xsl:attribute>
      <xsl:choose>
      <xsl:when test="user/gravatar_md5">
        <xsl:element name="img">
          <xsl:attribute name="src">http://gravatar.com/avatar/<xsl:value-of select="user/gravatar_md5" />?s=48</xsl:attribute>
          <xsl:attribute name="alt"><xsl:value-of select="user/name" /></xsl:attribute>
	</xsl:element>
      </xsl:when>
      <xsl:otherwise><xsl:value-of select="user/name" /></xsl:otherwise></xsl:choose>
      </xsl:element>
    </xsl:if>
    <div class="text">
    <xsl:value-of select="text" disable-output-escaping="yes" />
    </div>

    <div class="meta">
      <xsl:element name="a">
      <xsl:attribute name="href"><xsl:call-template name="permalink" /></xsl:attribute>
      <xsl:attribute name="title"><xsl:value-of select="created_at" /></xsl:attribute>
      <xsl:call-template name="relative-time">
        <xsl:with-param name="diff" select="@current - timestamp" />
      </xsl:call-template></xsl:element>
    </div>
  </xsl:template>

  <xsl:template name="userlink">http://<xsl:value-of select="user/domain" />/<xsl:value-of select="user/name" /></xsl:template>

  <xsl:template name="permalink">http://<xsl:value-of select="user/domain" />/<xsl:value-of select="user/name" />/<xsl:value-of select="global_id" /></xsl:template>

  <xsl:template name="relative-time">
    <xsl:param name="diff"/>
    <xsl:choose>
      <xsl:when test="$diff > 2419200">
        <xsl:value-of select="ceiling($diff div 2419200)"/>mo ago</xsl:when>
      <xsl:when test="$diff > 85000">
        <xsl:value-of select="ceiling($diff div 87600)"/>d ago</xsl:when>
      <xsl:when test="$diff > 3600">
       <xsl:value-of select="ceiling($diff div 3600)"/>h ago</xsl:when>
      <xsl:when test="$diff > 3400">about an hour ago</xsl:when>
      <xsl:when test="$diff > 1800">less than an hour ago</xsl:when>
      <xsl:when test="$diff > 60">
       <xsl:value-of select="floor($diff div 60)"/>m ago</xsl:when>
      <xsl:when test="$diff > 5">less than a minute ago</xsl:when>
      <xsl:otherwise>just now</xsl:otherwise>
    </xsl:choose>
  </xsl:template>

</xsl:stylesheet>
