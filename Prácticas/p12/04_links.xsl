<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html" encoding="UTF-8" doctype-public="-//W3C//DTD XHTML 1.0 Strict//EN" doctype-system="http://www.w3.org/TR/xhtml1/DTD/strct.dtd"/>
    <xsl:template match="/">
        <html>
            <head>
                <title>Mi primera transformación</title>
            </head>
            <body>
                <h2><xsl:value-of select="//header/@title"/></h2>
                <ul>
                    <xsl:for-each select="links/item">
                        <li>
                            <a>
                                <xsl:attribute name="href">
                                    <xsl:value-of select="./@href"/>
                                </xsl:attribute>
                                <xsl:value-of select="./@title"/>
                            </a>
                        </li>
                    </xsl:for-each>
                </ul>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>