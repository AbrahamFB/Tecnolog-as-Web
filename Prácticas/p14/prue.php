<?php

    $xml_doc = new DomDocument;

    $xml_doc->Load('10-catalogovod2.xml');

    $desserts = $xml_doc->getElementsByTagName('perfiles')->item(0);
    $limite = $desserts->getAttribute("limite");
    $limite++;
    $desserts->setAttribute("limite", $limite);


    $perfil = $xml_doc->createElement('perfil');
        $perfil->setAttribute("usuario", "Abraham");
        $perfil->setAttribute("idioma", "Español");

    

    $contenido = $xml_doc->createElement('contenido');
        $contenido->setAttribute("clasificacion", "A");

        $peliculas = $xml_doc->createElement('peliculas');
            $genero1 = $xml_doc->createElement('genero');
                $genero1->setAttribute("nombre", "Infatil");
                    $titulo11 = $xml_doc->createElement('titulo', "Bob Esponja");   
                        $titulo11->setAttribute("duracion", "01:02:00"); 
                    $titulo12 = $xml_doc->createElement('titulo', "Hora de Aventura");
                        $titulo12->setAttribute("duracion", "02:01:10");    
                $genero1->appendChild($titulo11); 
                $genero1->appendChild($titulo12);

            $genero2 = $xml_doc->createElement('genero');
                $genero2->setAttribute("nombre", "Science fiction");
                    $titulo21 = $xml_doc->createElement('titulo', "Joker");   
                        $titulo21->setAttribute("duracion", "01:02:00");
                    $titulo22 = $xml_doc->createElement('titulo', "I, Robot");
                        $titulo22->setAttribute("duracion", "02:01:10");
                $genero2->appendChild($titulo21);
                $genero2->appendChild($titulo22); 

            $peliculas->appendChild($genero1);    
            $peliculas->appendChild($genero2);
        $contenido->appendChild($peliculas);   

        $programas = $xml_doc->createElement('programas');    
            $genero1 = $xml_doc->createElement('genero');
                $genero1->setAttribute("nombre", "Familia");
                    $titulo31 = $xml_doc->createElement('titulo', "Mi pareja puede");
                        $titulo31->setAttribute("temporada", "1");
                        $titulo31->setAttribute("capitulo", "5");

                    $titulo42 = $xml_doc->createElement('titulo', "The Umbrella Academy");
                        $titulo42->setAttribute("temporada", "3");
                        $titulo42->setAttribute("capitulo", "1");

            $genero1->appendChild($titulo31); 
            $genero1->appendChild($titulo42);  

            $genero2 = $xml_doc->createElement('genero');
                $genero2->setAttribute("nombre", "Comedia");
                    $titulo51 = $xml_doc->createElement('titulo', "Impractical Jokers");
                        $titulo51->setAttribute("temporada", "1");
                        $titulo51->setAttribute("capitulo", "1");

                    $titulo62 = $xml_doc->createElement('titulo', "Vecinos");
                        $titulo62->setAttribute("temporada", "30");
                        $titulo62->setAttribute("capitulo", "1");

            $genero2->appendChild($titulo51);
            $genero2->appendChild($titulo62); 

        $programas->appendChild($genero1);    
        $programas->appendChild($genero2);
        $contenido->appendChild($programas);    
    
    $perfil->appendChild($contenido);

    $desserts->appendChild($perfil);

    $done = $xml_doc->save("10-catalogovod2.xml");
?>
<?php

    libxml_use_internal_errors(true);
    $xml= new DOMDocument();
    $documento = file_get_contents('10-catalogovod2.xml');
    $xml->loadXML($documento, LIBXML_NOBLANKS);
    // Or load if filename required
    $xsd = '10-catalogovod.xsd';
    if (!$xml->schemaValidate($xsd))
    // Or schemaValidateSource if string used.
    {
    $errors = libxml_get_errors();
    $noError = 1;
    $lista = '';
    foreach ($errors as $error)
    {
    $lista = $lista.'['.($noError++).']: '.$error->message.' ';
    }
    echo $lista;
    }
?>