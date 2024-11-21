<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html" indent="yes" />

    <!-- Template for the root element -->
    <xsl:template match="/songs">
        <html>
            <head>
                <title>Music Catalog</title>
                <style>
                    table {
                        width: 80%;
                        margin: auto;
                        border-collapse: collapse;
                        font-family: Arial, sans-serif;
                    }
                    th, td {
                        border: 1px solid #ccc;
                        padding: 10px;
                        text-align: left;
                    }
                    th {
                        background-color: #f4f4f4;
                        font-weight: bold;
                    }
                    tr:nth-child(even) {
                        background-color: #f9f9f9;
                    }
                    tr:hover {
                        background-color: #f1f1f1;
                    }
                    caption {
                        font-size: 1.5em;
                        margin-bottom: 10px;
                    }
                </style>
            </head>
            <body>
                <table>
                    <caption>Music Catalog</caption>
                    <tr>
                        <th>Title</th>
                        <th>Artist</th>
                        <th>Album</th>
                        <th>Duration</th>
                    </tr>
                    <xsl:for-each select="song">
                        <tr>
                            <td><xsl:value-of select="title"/></td>
                            <td><xsl:value-of select="artist"/></td>
                            <td><xsl:value-of select="album"/></td>
                            <td><xsl:value-of select="duration"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
