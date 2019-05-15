<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" encoding="UTF-8" indent="yes"/>
    <xsl:template match="/">
        <html>
            <head>
                <meta name="author" content="Nerea Valdés Egocheaga"/>
                <meta name="description"
                      content="Proyecto Dark - Junio Software y Estándares para la Web"/>
                <meta name="keywords" content="SEW,Dark,Junio,Software,Estándares,Web"/>
                <title>Proyecto Dark - Junio Software y Estándares para la Web</title>
                <link rel="stylesheet" type="text/css" href="../css/style.css"/>
            </head>
            <body>
                <header>
                    <h1>Dark</h1>
                </header>
                <main>
                    <xsl:for-each select="temporadas/temporada">
                        <h2>Temporada <xsl:value-of select="@t"/></h2>
                            <section>

                                <ul>
                                    <xsl:for-each select="episodios/episodio">

                                        <h3>
                                        Episodio <xsl:value-of select="@ep"/> :
                                        <xsl:value-of select="@titulo"/>
                                        </h3>

                                        <h4>Resumen:</h4>
                                        <p>
                                            <xsl:value-of select="resumen"/>
                                        </p>
                                        <h4>Sucesos</h4>
                                        <section>
                                            <xsl:for-each select="sucesos/suceso">
                                                <p>Descripción del suceso:
                                                    <xsl:value-of select="descripcion"/>
                                                </p>
                                                <p>Año: <xsl:value-of select="año"/>
                                                </p>
                                                <p>Lugar: <xsl:value-of select="lugar"/>
                                                </p>
                                            <xsl:for-each select="personajes/personaje">
                                                <p><xsl:value-of select="familia"/>,
                                                    <xsl:value-of select="nombre"/> de 
                                                <xsl:value-of select="edad"/> años.
                                                <xsl:value-of select="contexto"/></p>
                                            </xsl:for-each>

                                            </xsl:for-each>
                                        <section/>

                                        </section>
                                    </xsl:for-each>
                                </ul>
                            </section>
                    </xsl:for-each>
                </main>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>