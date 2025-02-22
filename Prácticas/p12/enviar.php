<?php

    $nombreF = @$_POST[nombre];
    $idiomaF = @$_POST[idioma];
    $clasificacion = @$_POST[clasificacion];

    ##########PELICULAS##########
    $genero1F = @$_POST[genero1];
    $titulo11F = @$_POST[titulo11];
    $duracion11F = @$_POST[duracion11];

    $titulo12F = @$_POST[titulo12];
    $duracion12F = @$_POST[duracion12];


    $genero2F = @$_POST[genero2];
    $titulo21F = @$_POST[titulo21];
    $duracion21F = @$_POST[duracion21];

    $titulo22F = @$_POST[titulo22];
    $duracion22F = @$_POST[duracion22];


    ##########PEROGRAMAS##########
    $genero1pF = @$_POST[genero1p];
    $titulo11pF = @$_POST[titulo11p];
    $temporada11F = @$_POST[temporada11];
    $capitulo11F = @$_POST[capitulo11];

    $titulo12pF = @$_POST[titulo12p];
    $temporada12F = @$_POST[temporada12];
    $capitulo12F = @$_POST[capitulo12];


    $genero2pF = @$_POST[genero2p];
    $titulo21pF = @$_POST[titulo21p];
    $temporada21F = @$_POST[temporada21];
    $capitulo21F = @$_POST[capitulo21];

    $titulo22pF = @$_POST[titulo22p];
    $temporada22F = @$_POST[temporada22];
    $capitulo22F = @$_POST[capitulo22];

    $xml_doc = new DomDocument;

    $xml_doc->Load('10-catalogovod.xml');

    $desserts = $xml_doc->getElementsByTagName('perfiles')->item(0);
    $limite = $desserts->getAttribute("limite");
    $limite++;
    $desserts->setAttribute("limite", $limite);


    $perfil = $xml_doc->createElement('perfil');
        $perfil->setAttribute("usuario", $nombreF);
        $perfil->setAttribute("idioma", $idiomaF);

    

    $contenido = $xml_doc->createElement('contenido');
        $contenido->setAttribute("clasificacion", $clasificacion);

        $peliculas = $xml_doc->createElement('peliculas');
            $genero1 = $xml_doc->createElement('genero');
                $genero1->setAttribute("nombre", $genero1F);
                    $titulo11 = $xml_doc->createElement('titulo', $titulo11F);   
                        $titulo11->setAttribute("duracion", $duracion11F); 
                    $titulo12 = $xml_doc->createElement('titulo', $titulo12F);
                        $titulo12->setAttribute("duracion", $duracion12F);    
                $genero1->appendChild($titulo11); 
                $genero1->appendChild($titulo12);

            $genero2 = $xml_doc->createElement('genero');
                $genero2->setAttribute("nombre", $genero2F);
                    $titulo21 = $xml_doc->createElement('titulo', $titulo21F);   
                        $titulo21->setAttribute("duracion", $duracion21F);
                    $titulo22 = $xml_doc->createElement('titulo', $titulo22F);
                        $titulo22->setAttribute("duracion", $duracion22F);
                $genero2->appendChild($titulo21);
                $genero2->appendChild($titulo22); 

            $peliculas->appendChild($genero1);    
            $peliculas->appendChild($genero2);
        $contenido->appendChild($peliculas);   

        $programas = $xml_doc->createElement('programas');    
            $genero1 = $xml_doc->createElement('genero');
                $genero1->setAttribute("nombre", $genero1pF);
                    $titulo31 = $xml_doc->createElement('titulo', $titulo11pF);
                        $titulo31->setAttribute("temporada", $temporada11F);
                        $titulo31->setAttribute("capitulo", $capitulo11F);

                    $titulo42 = $xml_doc->createElement('titulo', $titulo12pF);
                        $titulo42->setAttribute("temporada", $temporada12F);
                        $titulo42->setAttribute("capitulo", $capitulo12F);

            $genero1->appendChild($titulo31); 
            $genero1->appendChild($titulo42);  

            $genero2 = $xml_doc->createElement('genero');
                $genero2->setAttribute("nombre", $genero2pF);
                    $titulo51 = $xml_doc->createElement('titulo', $titulo21pF);
                        $titulo51->setAttribute("temporada", $temporada21F);
                        $titulo51->setAttribute("capitulo", $capitulo21F);

                    $titulo62 = $xml_doc->createElement('titulo', $titulo22pF);
                        $titulo62->setAttribute("temporada", $temporada22F);
                        $titulo62->setAttribute("capitulo", $capitulo22F);

            $genero2->appendChild($titulo51);
            $genero2->appendChild($titulo62); 

        $programas->appendChild($genero1);    
        $programas->appendChild($genero2);
        $contenido->appendChild($programas);    
    
    $perfil->appendChild($contenido);

    $desserts->appendChild($perfil);

    $done = $xml_doc->save("10-catalogovod.xml");
    #################################################################3

    /*echo "<h1>Datos del Usuario</h1>";
    echo "Nombre: ".$nombre."<br>";
    echo "Idioma: ".$idioma."<br>";
    echo "Clasificación: ".$clasificacion."<br>";
    echo "<hr>";
    echo "<h3>Peliculas</h3>";
    echo "Genero 1: ".$genero1."<br>";
    echo "Título 1: ".$titulo11."<br>";
    echo "Duracion 1: ".$duracion11."<br>";

    echo "<br>";

    echo "Título 2: ".$titulo12."<br>"; 
    echo "Duracion 2: ".$duracion12."<br>";

    echo "<br><br>";
    echo "Genero 2: ".$genero2."<br>";
    echo "Título 1: ".$titulo21."<br>";
    echo "Duracion 1: ".$duracion21."<br>";

    echo "<br>";

    echo "Título 2: ".$titulo22."<br>"; 
    echo "Duracion 2: ".$duracion22."<br>";


    echo "<h3>Programas</h3>";
    echo "Genero 1: ".$genero1p."<br>";
    echo "Título 1: ".$titulo11p."<br>";
    echo "Temporada 1: ".$temporada11."<br>";
    echo "Capitulo 1: ".$capitulo11."<br>";

    echo "<br>";

    echo "Título 2: ".$titulo12p."<br>";
    echo "Temporada 2: ".$temporada12."<br>";
    echo "Capitulo 2: ".$capitulo12."<br>";

    echo "<br><br>";
    echo "Genero 2: ".$genero2p."<br>";
    echo "Título 1: ".$titulo21p."<br>";
    echo "Temporada 1: ".$temporada21."<br>";
    echo "Capitulo 1: ".$capitulo21."<br>";

    echo "<br>";

    echo "Título 2 ".$titulo22p."<br>";
    echo "Temporada 2: ".$temporada22."<br>";
    echo "Capitulo 2: ".$capitulo22."<br>";


    
*/
?>  