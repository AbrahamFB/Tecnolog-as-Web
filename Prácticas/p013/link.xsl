<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html" encoding="UTF-8" doctype-public="-//W3C//DTD XHTML 1.0 Strict//EN"
        doctype-system="http://www.w3.org/TR/xhtml1/DTD/strct.dtd"/>
    <xsl:template match="/">
        <html>
            <head>
                <title>Catálogo VOD</title>
            </head>
            <body>
                <style type="text/css">
                    body {
                    background-color: #ffdd90;
                    background-image: url("orchid-4720841_1280.jpg");
                    background-size:cover;
                    
                    }
                </style>
                
                <h1>Mi pequeño VOD</h1>
                
                <img
                    src="https://cdn.pixabay.com/photo/2014/03/25/16/57/clapper-297673_960_720.png" width="30%" align="right"/>
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

                <xsl:for-each select="/CatalogoVOD/cuenta/perfiles/perfil">
                    <h5>Nombre: <xsl:value-of select="./@usuario"/>
                    </h5>

                    <style type="text/css">
                        .tg {
                            border-collapse: collapse;
                            border-spacing: 0;
                            border-color: #C44D58;
                        }
                        .tg td {
                            font-family: Arial, sans-serif;
                            font-size: 14px;
                            padding: 10px 20px;
                            border-style: solid;
                            border-width: 1px;
                            overflow: hidden;
                            word-break: normal;
                            border-color: #C44D58;
                            color: #002b36;
                            background-color: #F9CDAD;
                        }
                        .tg th {
                            font-family: Arial, sans-serif;
                            font-size: 14px;
                            font-weight: normal;
                            padding: 10px 20px;
                            border-style: solid;
                            border-width: 1px;
                            overflow: hidden;
                            word-break: normal;
                            border-color: #C44D58;
                            color: #fdf6e3;
                            background-color: #FE4365;
                        }
                        .tg .tg-pzl3 {
                            background-color: #ffc702;
                            border-color: inherit;
                            text-align: left;
                            vertical-align: top
                        }
                        .tg .tg-qryt {
                            font-weight: bold;
                            font-size: 28px;
                            font-family: "Arial Black", Gadget, sans-serif !important;
                            ;
                            background-color: #f56b00;
                            border-color: inherit;
                            text-align: center;
                            vertical-align: top
                        }
                        .tg .tg-0pky {
                            border-color: inherit;
                            text-align: left;
                            vertical-align: top
                        }</style>
                    <table class="tg">
                        <tr>
                            <th class="tg-qryt" colspan="4">PELÍCULAS</th>
                        </tr>
                        <tr>
                            <td class="tg-pzl3">Título</td>
                            <td class="tg-pzl3">Clasificación</td>
                            <td class="tg-pzl3">Género</td>
                            <td class="tg-pzl3">Duración</td>
                        </tr>

                        <xsl:for-each select="./contenido/peliculas">
                            <tr>
                                <td class="tg-0pky">
                                    <xsl:value-of select="./genero[1]/titulo[1]"/>
                                </td>
                                <td class="tg-0pky">
                                    <xsl:value-of select="../@clasificacion"/>
                                </td>
                                <td class="tg-0pky">
                                    <xsl:value-of select="./genero[1]/@nombre"/>
                                </td>
                                <td class="tg-0pky">
                                    <xsl:value-of select="./genero[1]/titulo[1]/@duracion"/>
                                </td>
                            </tr>
                            <tr>
                                <td class="tg-0pky">
                                    <xsl:value-of select="./genero[1]/titulo[2]"/>
                                </td>
                                <td class="tg-0pky">
                                    <xsl:value-of select="../@clasificacion"/>
                                </td>
                                <td class="tg-0pky">
                                    <xsl:value-of select="./genero[1]/@nombre"/>
                                </td>
                                <td class="tg-0pky">
                                    <xsl:value-of select="./genero[1]/titulo[2]/@duracion"/>
                                </td>
                            </tr>

                            <tr>
                                <td class="tg-0pky">
                                    <xsl:value-of select="./genero[2]/titulo[1]"/>
                                </td>
                                <td class="tg-0pky">
                                    <xsl:value-of select="../@clasificacion"/>
                                </td>
                                <td class="tg-0pky">
                                    <xsl:value-of select="./genero[2]/@nombre"/>
                                </td>
                                <td class="tg-0pky">
                                    <xsl:value-of select="./genero[2]/titulo[1]/@duracion"/>
                                </td>
                            </tr>

                            <tr>
                                <td class="tg-0pky">
                                    <xsl:value-of select="./genero[2]/titulo[2]"/>
                                </td>
                                <td class="tg-0pky">
                                    <xsl:value-of select="../@clasificacion"/>
                                </td>
                                <td class="tg-0pky">
                                    <xsl:value-of select="./genero[2]/@nombre"/>
                                </td>
                                <td class="tg-0pky">
                                    <xsl:value-of select="./genero[2]/titulo[2]/@duracion"/>
                                </td>
                            </tr>
                        </xsl:for-each>

                    </table>
                    <br/>


                    <style type="text/css">
                        .tg2 {
                            border-collapse: collapse;
                            border-spacing: 0;
                            border-color: #9ABAD9;
                        }
                        .tg2 td {
                            font-family: Arial, sans-serif;
                            font-size: 14px;
                            padding: 12px 20px;
                            border-style: solid;
                            border-width: 1px;
                            overflow: hidden;
                            word-break: normal;
                            border-color: #9ABAD9;
                            color: #444;
                            background-color: #EBF5FF;
                        }
                        .tg2 th {
                            font-family: Arial, sans-serif;
                            font-size: 14px;
                            font-weight: normal;
                            padding: 12px 20px;
                            border-style: solid;
                            border-width: 1px;
                            overflow: hidden;
                            word-break: normal;
                            border-color: #9ABAD9;
                            color: #fff;
                            background-color: #409cff;
                        }
                        .tg2 .tg2-rklo {
                            font-weight: bold;
                            font-size: 28px;
                            font-family: "Arial Black", Gadget, sans-serif !important;
                            ;
                            background-color: #9abad9;
                            border-color: inherit;
                            text-align: center;
                            vertical-align: top
                        }
                        .tg2 .tg2-x6qq {
                            background-color: #dae8fc;
                            border-color: inherit;
                            text-align: left;
                            vertical-align: top
                        }
                        .tg2 .tg2-3kui {
                            background-color: #dae8fc;
                            border-color: #000000;
                            text-align: left;
                            vertical-align: top
                        }
                        .tg2 .tg2-0pky {
                            border-color: inherit;
                            text-align: left;
                            vertical-align: top
                        }
                        .tg2 .tg2-73oq {
                            border-color: #000000;
                            text-align: left;
                            vertical-align: top
                        }</style>
                    <table class="tg2">

                        <tr>
                            <th class="tg2-rklo" colspan="5">PROGRAMAS</th>
                        </tr>
                        <tr>
                            <td class="tg2-x6qq">Título</td>
                            <td class="tg2-x6qq">Clasificación</td>
                            <td class="tg2-x6qq">Género</td>
                            <td class="tg2-x6qq">Capítulo</td>
                            <td class="tg2-3kui">Temporada</td>
                        </tr>
                        <xsl:for-each select="./contenido/programas">
                            <tr>
                                <td class="tg2-0pky">
                                    <xsl:value-of select="./genero[1]/titulo[1]"/>
                                </td>
                                <td class="tg2-0pky">
                                    <xsl:value-of select="../@clasificacion"/>
                                </td>
                                <td class="tg2-0pky">
                                    <xsl:value-of select="./genero[1]/@nombre"/>
                                </td>
                                <td class="tg2-0pky">
                                    <xsl:value-of select="./genero[1]/titulo[1]/@capitulo"/>
                                </td>
                                <td class="tg2-0pky">
                                    <xsl:value-of select="./genero[1]/titulo[1]/@temporada"/>
                                </td>
                            </tr>
                            <tr>
                                <td class="tg2-0pky">
                                    <xsl:value-of select="./genero[1]/titulo[2]"/>
                                </td>
                                <td class="tg2-0pky">
                                    <xsl:value-of select="../@clasificacion"/>
                                </td>
                                <td class="tg2-0pky">
                                    <xsl:value-of select="./genero[1]/@nombre"/>
                                </td>
                                <td class="tg2-0pky">
                                    <xsl:value-of select="./genero[1]/titulo[2]/@capitulo"/>
                                </td>
                                <td class="tg2-0pky">
                                    <xsl:value-of select="./genero[1]/titulo[2]/@temporada"/>
                                </td>
                            </tr>
                            <tr>
                                <td class="tg2-0pky">
                                    <xsl:value-of select="./genero[2]/titulo[1]"/>
                                </td>
                                <td class="tg2-0pky">
                                    <xsl:value-of select="../@clasificacion"/>
                                </td>
                                <td class="tg2-0pky">
                                    <xsl:value-of select="./genero[2]/@nombre"/>
                                </td>
                                <td class="tg2-0pky">
                                    <xsl:value-of select="./genero[2]/titulo[1]/@capitulo"/>
                                </td>
                                <td class="tg2-0pky">
                                    <xsl:value-of select="./genero[2]/titulo[1]/@temporada"/>
                                </td>
                            </tr>
                            <tr>
                                <td class="tg2-0pky">
                                    <xsl:value-of select="./genero[2]/titulo[2]"/>
                                </td>
                                <td class="tg2-0pky">
                                    <xsl:value-of select="../@clasificacion"/>
                                </td>
                                <td class="tg2-0pky">
                                    <xsl:value-of select="./genero[2]/@nombre"/>
                                </td>
                                <td class="tg2-0pky">
                                    <xsl:value-of select="./genero[2]/titulo[2]/@capitulo"/>
                                </td>
                                <td class="tg2-0pky">
                                    <xsl:value-of select="./genero[2]/titulo[2]/@temporada"/>
                                </td>
                            </tr>
                        </xsl:for-each>
                    </table>
                    <br/>

                </xsl:for-each>

            </body>
            <footer id="footer">
                <p>By Abraham Flores B<br/>2020 | <a href="http://twl.000webhostapp.com/">TWL</a> | Todos los derechos reservados D.R.</p>
            </footer>
        </html>
    </xsl:template>
</xsl:stylesheet>
