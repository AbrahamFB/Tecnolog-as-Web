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

    echo "<h1>Datos del Usuario</h1>";
    echo "Nombre: ".$nombreF."<br>";
    echo "Idioma: ".$idiomaF."<br>";
    echo "Clasificación: ".$clasificacion."<br>";
    echo "<hr>";
    echo "<h3>Peliculas</h3>";
    echo "Genero 1: ".$genero1F."<br>";
    echo "Título 1: ".$titulo11F."<br>";
    echo "Duracion 1: ".$duracion11F."<br>";

    echo "<br>";

    echo "Título 2: ".$titulo12F."<br>"; 
    echo "Duracion 2: ".$duracion12F."<br>";

    echo "<br><br>";
    echo "Genero 2: ".$genero2F."<br>";
    echo "Título 1: ".$titulo21F."<br>";
    echo "Duracion 1: ".$duracion21F."<br>";

    echo "<br>";

    echo "Título 2: ".$titulo22F."<br>"; 
    echo "Duracion 2: ".$duracion22F."<br>";


    echo "<h3>Programas</h3>";
    echo "Genero 1: ".$genero1pF."<br>";
    echo "Título 1: ".$titulo11pF."<br>";
    echo "Temporada 1: ".$temporada11F."<br>";
    echo "Capitulo 1: ".$capitulo11F."<br>";

    echo "<br>";

    echo "Título 2: ".$titulo12pF."<br>";
    echo "Temporada 2: ".$temporada12F."<br>";
    echo "Capitulo 2: ".$capitulo12F."<br>";

    echo "<br><br>";
    echo "Genero 2: ".$genero2pF."<br>";
    echo "Título 1: ".$titulo21pF."<br>";
    echo "Temporada 1: ".$temporada21F."<br>";
    echo "Capitulo 1: ".$capitulo21F."<br>";

    echo "<br>";

    echo "Título 2 ".$titulo22pF."<br>";
    echo "Temporada 2: ".$temporada22F."<br>";
    echo "Capitulo 2: ".$capitulo22F."<br>";

    echo '<a href="index.php"><button>Ver Tablas de Información</button></a>';

?>  
<?php

    libxml_use_internal_errors(true);
    $xml= new DOMDocument();
    $documento = file_get_contents('10-catalogovod2.xml');
    $xml->loadXML($documento, LIBXML_NOBLANKS);
    // Or load if filename required
    $xsd = '10-catalogovod.xsd';
    if (!$xml->schemaValidate($xsd)){
        // Or schemaValidateSource if string used.
        $errors = libxml_get_errors();
        $noError = 1;
        $lista = '';
        foreach ($errors as $error){
            $lista = $lista.'['.($noError++).']: '.$error->message.' ';
        }
        echo $lista;
    }
?>