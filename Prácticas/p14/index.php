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
                }
            </style>
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
                }
            </style>
        <h1>Mi pequeño VOD</h1>
        
        <img
            src="https://cdn.pixabay.com/photo/2014/03/25/16/57/clapper-297673_960_720.png" width="30%" align="right"/>

        <?php
            $dom = new DomDocument;
            $dom->load( '10-catalogovod.xml' );
            $dom->preserveWhiteSpace = FALSE;
            $params = $dom->getElementsByTagName('perfil');
            $k=0;
            foreach ($params as $perfil){  
                $contenido = $perfil->getElementsByTagName("contenido");
                $clasificacion = $contenido->item(0)->getAttribute("clasificacion");  
               #######################
                echo "<h4>Nombre :-> ".$perfil->getAttribute('usuario')."</h4><br>";     
                    
                $XMLpeliculas = $perfil->getElementsByTagName("peliculas");
                foreach ($XMLpeliculas as $generos) {
                    echo "<table class='tg'>";
                    echo "<tr>";
                        echo "<th class='tg-qryt' colspan='4'>PELÍCULAS</th>";
                    echo "</tr>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<td class='tg-pzl3'>Título</td>";
                        echo "<td class='tg-pzl3'>Clasificación</td>";
                        echo "<td class='tg-pzl3'>Género</td>";
                        echo "<td class='tg-pzl3'>Duración</td>";
                    echo "</tr>"; 
 

                    $XMLgeneros = $generos->getElementsByTagName("genero");
                    foreach($XMLgeneros as $generos){
                        $genero = $generos->getAttribute("nombre");
                        $XMLpeliculas = $generos->getElementsByTagName("titulo");
                        foreach($XMLpeliculas as $peliculas){
                            $titulo1=$peliculas->nodeValue;
                            $duracion1 = $peliculas->getAttribute("duracion");
                            
                                echo "<tr>";
                                    echo '<td class="tg-0pky">';
                                    echo $titulo1;
                                    echo "</td>";
                                    echo '<td class="tg-0pky">';
                                    echo $clasificacion;
                                    echo "</td>";
                                    echo '<td class="tg-0pky">';
                                    echo $genero;
                                    echo "</td>";
                                    echo '<td class="tg-0pky">';
                                    echo $duracion1;
                                    echo "</td>";
                                echo "</tr>";
                        }
                    }
                    echo "</table>";
                    echo "<br>";
                }
                
                    
                    $XMLprogramas = $perfil->getElementsByTagName("programas");
                        foreach ($XMLprogramas as $generos) {
                            $clasificacion1 = $contenido->item(0)->getAttribute("clasificacion");
                            echo "<table class='tg'>";
                            echo "<tr>";
                            echo '<th class="tg2-rklo" colspan="5">PROGRAMAS</th>';
                            echo "</tr>";
                            echo "<tr>";
                            echo '<td class="tg2-x6qq">Título</td>';
                            echo '<td class="tg2-x6qq">Clasificación</td>';
                            echo '<td class="tg2-x6qq">Género</td>';
                            echo '<td class="tg2-x6qq">Capítulo</td>';
                            echo '<td class="tg2-3kui">Temporada</td>';
                            echo "</tr>";

                            $XMLgeneros1 = $generos->getElementsByTagName("genero");
                            foreach($XMLgeneros1 as $generos1){
                                $genero1 = $generos1->getAttribute("nombre");
                                $XMLprogramas = $generos1->getElementsByTagName("titulo");                                           
                                foreach($XMLprogramas as $programas){
                                    $titulo2=$programas->nodeValue;
                                    $temporada = $programas->getAttribute("temporada");
                                    $capitulo = $programas->getAttribute("capitulo");
                
                                    echo "<tr>";
                                    echo '<td class="tg2-0pky">';
                                        echo $titulo2;
                                    echo "</td>";
                                    echo '<td class="tg2-0pky">';
                                        echo $clasificacion1;
                                    echo "</td>";
                                    echo '<td class="tg2-0pky">';
                                        echo $genero1;
                                    echo "</td>";
                                    echo '<td class="tg2-0pky">';
                                        echo $capitulo;
                                    echo "</td>";
                                    echo '<td class="tg2-0pky">';
                                        echo $temporada;
                                    echo "</td>";
                                echo "</tr>";
                                }
                            }
                            echo "</table>";
                            echo "<br>";
                        }   
                            
                }
            
        ?>
        <a href="form.html"><button>Registrar Usuario</button></a>
    </body>
    <footer id="footer">
        <p>By Abraham Flores B<br/>2020 | <a href="http://twl.000webhostapp.com/">TWL</a> | Todos los derechos reservados D.R.</p>
    </footer>
</html>  