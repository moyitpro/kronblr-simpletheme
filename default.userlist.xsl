<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  
  <xsl:output method="xml" omit-xml-declaration="yes" encoding="utf-8" indent="yes" />

  <xsl:template match="response">
      <xsl:if test="count(user)">
      <xsl:if test="@request = 'fmp.user.following'">
      <h4>Following</h4>
      </xsl:if>
      <xsl:if test="@request = 'fmp.user.followers'">
      <h4>Followers</h4>
      </xsl:if>
      <div class="userlist">
        <xsl:apply-templates select="user" />
      </div>
      </xsl:if>
  </xsl:template>

  <xsl:template match="user">
    <xsl:element name="a">
      <xsl:attribute name="title"><xsl:value-of select="name" /></xsl:attribute>
      <xsl:attribute name="href">http://<xsl:value-of select="domain" />/<xsl:value-of select="name" /></xsl:attribute>
      <xsl:if test="gravatar">
        <xsl:element name="img">
          <xsl:attribute name="src">http://gravatar.com/avatar/<xsl:value-of select="gravatar" />?s=36</xsl:attribute>
          <xsl:attribute name="alt"><xsl:value-of select="name" /></xsl:attribute>
	</xsl:element>
      </xsl:if>
    </xsl:element>
  </xsl:template>

</xsl:stylesheet>
