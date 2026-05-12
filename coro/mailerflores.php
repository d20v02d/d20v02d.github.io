<?php

// Get the form fields, removes html tags and whitespace.
    
    $flor01 = trim($_POST["flor01"]);    
    $flor02 = trim($_POST["flor02"]);  
    $flor03= trim($_POST["flor03"]);   
    $flor04= trim($_POST["flor04"]);   
    $flor05= trim($_POST["flor05"]);   
    $flor06= trim($_POST["flor06"]);   
    $flor07= trim($_POST["flor07"]);   
    $flor08= trim($_POST["flor08"]);   
    $flor09= trim($_POST["flor09"]);   
    $flor10= trim($_POST["flor10"]);   
    $flor11= trim($_POST["flor11"]);   
    $flor12= trim($_POST["flor12"]);   
    $flor13= trim($_POST["flor13"]);   
    $flor14= trim($_POST["flor14"]);   
    $flor15= trim($_POST["flor15"]);   
    $flor16= trim($_POST["flor16"]);   
    $flor17= trim($_POST["flor17"]);   
    $flor18= trim($_POST["flor18"]);   
    $flor19= trim($_POST["flor19"]);   
    $flor20= trim($_POST["flor20"]);   
    $flor21= trim($_POST["flor21"]);   
    $flor22= trim($_POST["flor22"]);   
    $planta01= trim($_POST["planta01"]);   
    $planta02= trim($_POST["planta02"]);   
    $planta03= trim($_POST["planta03"]);   
    $planta04= trim($_POST["planta04"]);   
    $planta05= trim($_POST["planta05"]);   
    $planta06= trim($_POST["planta06"]);   
    $planta07= trim($_POST["planta07"]);   
    $planta08= trim($_POST["planta08"]);   
    $planta09= trim($_POST["planta09"]);   
    $planta10= trim($_POST["planta10"]);   
    $planta11= trim($_POST["planta11"]);   
    $planta12= trim($_POST["planta12"]);   
    $planta13= trim($_POST["planta13"]);   
    $planta14= trim($_POST["planta14"]);   
    $planta15= trim($_POST["planta15"]);   
    $planta16= trim($_POST["planta16"]);   
    $planta17= trim($_POST["planta17"]);   
    $planta18= trim($_POST["planta18"]);   
    $planta19= trim($_POST["planta19"]);   
    $planta20= trim($_POST["planta20"]);   
    $planta21= trim($_POST["planta21"]);   
    $planta22= trim($_POST["planta22"]);   
    $planta23= trim($_POST["planta23"]);   
    $planta24= trim($_POST["planta24"]);   
    $planta25= trim($_POST["planta25"]);   
    $planta26= trim($_POST["planta26"]);   
    $planta27= trim($_POST["planta27"]);   
    $planta28= trim($_POST["planta28"]);   
    $planta29= trim($_POST["planta29"]);   
    $planta30= trim($_POST["planta30"]);   
    $planta31= trim($_POST["planta31"]);   
    $planta32= trim($_POST["planta32"]);   
    $planta33= trim($_POST["planta33"]);   
    $planta34= trim($_POST["planta34"]);   
    $planta35= trim($_POST["planta35"]);   
    $planta36= trim($_POST["planta36"]);   
    $planta37= trim($_POST["planta37"]);   
    $planta38= trim($_POST["planta38"]);   
    $planta39= trim($_POST["planta39"]);   
    $planta40= trim($_POST["planta40"]);   
    $planta41= trim($_POST["planta41"]);   
    $planta42= trim($_POST["planta42"]);   
    $planta43= trim($_POST["planta43"]);   
    $planta44= trim($_POST["planta44"]);  
    $ocasion01= trim($_POST["ocasion01"]);   
    $ocasion02= trim($_POST["ocasion02"]);   
    $ocasion03= trim($_POST["ocasion03"]);   
    $ocasion04= trim($_POST["ocasion04"]);
    $novia01= trim($_POST["novia01"]);   
    $novia02= trim($_POST["novia02"]);   
    $novia03= trim($_POST["novia03"]);   
    $novia04= trim($_POST["novia04"]);   
    $novia05= trim($_POST["novia05"]);   
    $novia06= trim($_POST["novia06"]);   
    $novia07= trim($_POST["novia07"]);   
    $novia08= trim($_POST["novia08"]);   
    $novia09= trim($_POST["novia09"]);   
    $novia10= trim($_POST["novia10"]);   
    $novia11= trim($_POST["novia11"]);   
    $novia12= trim($_POST["novia12"]);   
    $novia13= trim($_POST["novia13"]);   
    $novia14= trim($_POST["novia14"]);   
    $novia15= trim($_POST["novia15"]);   
    $novia16= trim($_POST["novia16"]);   
    $novia17= trim($_POST["novia17"]);   
    $novia18= trim($_POST["novia18"]);   
    $novia19= trim($_POST["novia19"]);   
    $evento01= trim($_POST["evento01"]);   
    $evento02= trim($_POST["evento02"]);   
    $evento03= trim($_POST["evento03"]);   
    $evento04= trim($_POST["evento04"]);   
    $regalo01= trim($_POST["regalo01"]);   
    $regalo02= trim($_POST["regalo02"]);   
    $regalo03= trim($_POST["regalo03"]);   
    $regalo04= trim($_POST["regalo04"]);   
    $cesta01= trim($_POST["cesta01"]);   
    $cesta02= trim($_POST["cesta02"]);   
    $cesta03= trim($_POST["cesta03"]);   
    $cesta04= trim($_POST["cesta04"]);   
    $funeral01= trim($_POST["funeral01"]);   
    $funeral02= trim($_POST["funeral02"]);   
    $funeral03= trim($_POST["funeral03"]);   
    $funeral04= trim($_POST["funeral04"]);      
    $oferta01= trim($_POST["oferta01"]);   
    $oferta02= trim($_POST["oferta02"]);   
    $oferta03= trim($_POST["oferta03"]);   

    $nombre = strip_tags(trim($_POST["nombre"]));
    $nombre = str_replace(array("\r","\n"),array(" "," "),$nombre);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $telefono = strip_tags(trim($_POST["telefono"]));
    $pedido = trim($_POST["pedido"]);
    $presupuesto = trim($_POST["presupuesto"]);
    $entrega = trim($_POST["entrega"]);
    $comoencontraste = trim($_POST["comoencontraste"]);
    $news = trim($_POST["news"]);    

    // Check the data.
    if (empty($nombre) OR empty($telefono) OR empty($pedido) OR empty($presupuesto) OR empty($entrega) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: http://www.floresemanuelle.es/index.php?success=-1#formulario");
        exit;
    }



    echo ($findus);

    // Set the recipient email address. Update this to YOUR desired email address.
    $recipient = "info@floresemanuelle.es";

    // Set the email subject.
    $subject = "Nuevo mensaje de: $nombre";

    // Build the email content.
    $email_content = "Nombre: $nombre\n\n";
    $email_content .= "E-mail: $email\n\n";
    $email_content .= "Telefono: $telefono\n\n";
    $email_content .= "Pedido:\n$pedido\n\n";
    $email_content .= "Presupuesto:\n$presupuesto\n\n";
    $email_content .= "Entrega:\n$entrega\n\n";
    $email_content .= "Nos encontro en: $comoencontraste\n\n\n";
    $email_content .= "Quiere: \n\n";                  

if ($flor01== "on") {$email_content .= "flor01\n\nRosas variadas (35 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/flores/flores-01.jpg\n\n";     
}
if ($flor02== "on") {$email_content .= "flor02\n\nTulipanes (15 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/flores/flores-02.jpg\n\n";     
} 
if ($flor03== "on") {$email_content .= "flor03\n\nRosas rojas (30 Euros docena)\n\nhttp://www.floresemanuelle.es/recursos/img/flores/flores-03.jpg\n\n";    
}
if ($flor04== "on") {$email_content .= "flor04\n\nRosas blancas (30 Euros docena)\n\nhttp://www.floresemanuelle.es/recursos/img/flores/flores-04.jpg\n\n";    
} 
if ($flor05== "on") {$email_content .= "flor05\n\nRamo de flores variadas (15 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/flores/flores-05.jpg\n\n";   
} 
if ($flor06== "on") {$email_content .= "flor06\n\nLilium oriental (15 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/flores/flores-06.jpg\n\n";   
} 
if ($flor07== "on") {$email_content .= "flor07\n\nGerberas variadas (15 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/flores/flores-07.jpg\n\n";    
}
if ($flor08== "on") {$email_content .= "flor08\n\nClaveles variados (8 Euros docena)\n\nhttp://www.floresemanuelle.es/recursos/img/flores/flores-08.jpg\n\n";  
}
if ($flor09== "on") {$email_content .= "flor09\n\nGerberas decoradas (15 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/flores/flores-09.jpg\n\n";      
}
if ($flor10== "on") {$email_content .= "flor10\n\nRosas rosa (25) (55 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/flores/flores-10.jpg\n\n"; 
    } 
if ($flor11== "on") {$email_content .= "flor11\n\nTulipanes rojos (10) (10 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/flores/flores-11.jpg\n\n"; 
    } 
if ($flor12== "on") {$email_content .= "flor12\n\nRamo variado con rosas (20 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/flores/flores-12.jpg\n\n"; 
    } 
if ($flor13== "on") {$email_content .= "flor13\n\nGirasoles (8 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/flores/flores-13.jpg\n\n"; 
    } 
if ($flor14== "on") {$email_content .= "flor14\n\nTulipanes variados (15 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/flores/flores-14.jpg\n\n"; 
    } 
if ($flor15== "on") {$email_content .= "flor15\n\nMargaritas rojas (15 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/flores/flores-15.jpg\n\n"; 
    } 
if ($flor16== "on") {$email_content .= "flor16\n\nMargaritas blancas (15 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/flores/flores-16.jpg\n\n"; 
    } 
if ($flor17== "on") {$email_content .= "flor17\n\nMargaritas variadas (15 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/flores/flores-17.jpg\n\n"; 
    } 
if ($flor18== "on") {$email_content .= "flor18\n\nMargaritas variadas (20 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/flores/flores-18.jpg\n\n"; 
    } 
if ($planta01== "on") {$email_content .= "planta01\n\nFlor de Pascua (mediana) (15 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-01.jpg\n\n";
    } 
if ($planta02== "on") {$email_content .= "planta02\n\nCesto de Pascua (15 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-02.jpg\n\n";
    } 
if ($planta03== "on") {$email_content .= "planta03\n\nGuzmania (12 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-03.jpg\n\n";
    } 
if ($planta04== "on") {$email_content .= "planta04\n\nAnthurium (15 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-04.jpg\n\n";
    } 
if ($planta05== "on") {$email_content .= "planta05\n\nVriesia (12 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-05.jpg\n\n";
    } 
if ($planta06== "on") {$email_content .= "planta06\n\nOrquídeas variadas (15 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-06.jpg\n\n";
    } 
if ($planta07== "on") {$email_content .= "planta07\n\nOrquídeas variadas (15 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-07.jpg\n\n";
    } 
if ($planta08== "on") {$email_content .= "planta08\n\nMini Orquídeas variadas (12 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-08.jpg\n\n";
    } 
if ($planta09== "on") {$email_content .= "planta09\n\nAreca (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-09.jpg\n\n";
    } 
if ($planta10== "on") {$email_content .= "planta10\n\nCóleo (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-10.jpg\n\n";
    } 
if ($planta11== "on") {$email_content .= "planta11\n\nMezcla de cóleos (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-11.jpg\n\n";
    } 
if ($planta12== "on") {$email_content .= "planta12\n\nLirio de paz (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-12.jpg\n\n";
    } 
if ($planta13== "on") {$email_content .= "planta13\n\nFicus (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-13.jpg\n\n";
    } 
if ($planta14== "on") {$email_content .= "planta14\n\nFicus benjamina (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-14.jpg\n\n";
    } 
if ($planta15== "on") {$email_content .= "planta15\n\nZamioculcas (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-15.jpg\n\n";
    } 
if ($planta16== "on") {$email_content .= "planta16\n\nNido de ave (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-16.jpg\n\n";
    } 
if ($planta17== "on") {$email_content .= "planta17\n\nFicus Lyrata (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-17.jpg\n\n";
    } 
if ($planta18== "on") {$email_content .= "planta18\n\nYuca (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-18.jpg\n\n";
    } 
if ($planta19== "on") {$email_content .= "planta19\n\nHiedra (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-19.jpg\n\n";
    } 
if ($planta20== "on") {$email_content .= "planta20\n\nKalanchoe (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-20.jpg\n\n";
    } 
if ($planta21== "on") {$email_content .= "planta21\n\nHypoestes (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-21.jpg\n\n";
    } 
if ($planta22== "on") {$email_content .= "planta22\n\nSolanum (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-22.jpg\n\n";
    } 
if ($planta23== "on") {$email_content .= "planta23\n\nHolambelo (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-23.jpg\n\n";
    } 
if ($planta24== "on") {$email_content .= "planta24\n\nCiclamen (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-24.jpg\n\n";
    } 
if ($planta25== "on") {$email_content .= "planta25\n\nDrácena (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-25.jpg\n\n";
    } 
if ($planta26== "on") {$email_content .= "planta26\n\nLivistonia (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-26.jpg\n\n";
    } 
if ($planta27== "on") {$email_content .= "planta27\n\nBambú (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-27.jpg\n\n";
    } 
if ($planta28== "on") {$email_content .= "planta28\n\nCactus (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-28.jpg\n\n";
    } 
if ($planta29== "on") {$email_content .= "planta29\n\nPachira (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-29.jpg\n\n";
    } 
if ($planta30== "on") {$email_content .= "planta30\n\nAloe Vera (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-30.jpg\n\n";
    } 
if ($planta31== "on") {$email_content .= "planta31\n\nSansevieria (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-31.jpg\n\n";
    } 
if ($planta32== "on") {$email_content .= "planta32\n\nPlanta de jade (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-32.jpg\n\n";
    } 
if ($planta33== "on") {$email_content .= "planta33\n\nPlanta del dinero (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-33.jpg\n\n";
    } 
if ($planta34== "on") {$email_content .= "planta34\n\nClavel chino (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-34.jpg\n\n";
    } 
if ($planta35== "on") {$email_content .= "planta35\n\nCulantrillo de pozo (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-35.jpg\n\n";
    } 
if ($planta36== "on") {$email_content .= "planta36\n\nMonstera (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-36.jpg\n\n";
    } 
if ($planta37== "on") {$email_content .= "planta37\n\nCesta variada (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-37.jpg\n\n";
    } 
if ($planta38== "on") {$email_content .= "planta38\n\nPlantas crasas (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/plantas/planta-38.jpg\n\n";
    } 
if ($ocasion01== "on") {$email_content .= "ocasion01\n\nCentro de mesa (25 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/ocasiones/ocasion-01.jpg\n\n";
    } 
if ($ocasion02== "on") {$email_content .= "ocasion02\n\nCentro con rosas (50 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/ocasiones/ocasion-02.jpg\n\n";
    } 
if ($ocasion03== "on") {$email_content .= "ocasion03\n\nVariado con lilium (30 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/ocasiones/ocasion-03.jpg\n\n";
    } 
if ($ocasion04== "on") {$email_content .= "ocasion04\n\nVariado con rosas (30 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/ocasiones/ocasion-04.jpg\n\n";
    } 
if ($novia01== "on") {$email_content .= "novia01\n\nRosas rojas en bouquet (50 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/novias/ramo-novia-01.jpg\n\n";
    } 
if ($novia02== "on") {$email_content .= "novia02\n\nRosas blancas (70 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/novias/ramo-novia-02.jpg\n\n";
    } 
if ($novia03== "on") {$email_content .= "novia03\n\nRosas rosas (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/novias/ramo-novia-03.jpg\n\n";
    } 
if ($novia04== "on") {$email_content .= "novia04\n\nRosas blancas y rosas (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/novias/ramo-novia-04.jpg\n\n";
    } 
if ($novia05== "on") {$email_content .= "novia05\n\nRosas rojas y calas (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/novias/ramo-novia-05.jpg\n\n";
    } 
if ($novia06== "on") {$email_content .= "novia06\n\nRosas rojas (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/novias/ramo-novia-06.jpg\n\n";
    } 
if ($novia07== "on") {$email_content .= "novia07\n\nCalas blancas y rosadas (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/novias/ramo-novia-07.jpg\n\n";
    } 
if ($novia08== "on") {$email_content .= "novia08\n\nRosas rosadas y blancas (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/novias/ramo-novia-08.jpg\n\n";
    } 
if ($novia09== "on") {$email_content .= "novia09\n\nCalas amarillas (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/novias/ramo-novia-09.jpg\n\n";
    } 
if ($novia10== "on") {$email_content .= "novia10\n\nVariado con rosas (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/novias/ramo-novia-10.jpg\n\n";
    } 
if ($novia11== "on") {$email_content .= "novia11\n\nBouquet rosas blancas (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/novias/ramo-novia-11.jpg\n\n";
    } 
if ($novia12== "on") {$email_content .= "novia12\n\nBouquet rosas crema (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/novias/ramo-novia-12.jpg\n\n";
    } 
if ($novia13== "on") {$email_content .= "novia13\n\nRamo en cascada (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/novias/ramo-novia-13.jpg\n\n";
    } 
if ($evento01== "on") {$email_content .= "evento01\n\nCentro de flores variado (35 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/eventos/evento-01.jpg\n\n";
    } 
if ($evento02== "on") {$email_content .= "evento02\n\nCentro de flores variado (30 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/eventos/evento-02.jpg\n\n";
    } 
if ($evento03== "on") {$email_content .= "evento03\n\nArreglo variado (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/eventos/evento-03.jpg\n\n";
    } 
if ($evento04== "on") {$email_content .= "evento04\n\nArreglo con girasoles (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/eventos/evento-04.jpg\n\n";
    } 
if ($regalo01== "on") {$email_content .= "regalo01\n\nCentro de flores variado (35 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/regalos/regalo-01.jpg\n\n";
    } 
if ($regalo02== "on") {$email_content .= "regalo02\n\nCentro de flores variado (35 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/regalos/regalo-02.jpg\n\n";
    } 
if ($regalo03== "on") {$email_content .= "regalo03\n\nCentro de flores variado (35 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/regalos/regalo-03.jpg\n\n";
    } 
if ($regalo04== "on") {$email_content .= "regalo04\n\nArreglo sobre acebo (35 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/regalos/regalo-04.jpg\n\n";
    } 
if ($cesta01== "on") {$email_content .= "cesta01\n\nCesta con bombones (35 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/cestas/cesta-01.jpg\n\n";
    } 
if ($cesta02== "on") {$email_content .= "cesta02\n\nCesta con fruta (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/cestas/cesta-02.jpg\n\n";
    } 
if ($cesta03== "on") {$email_content .= "cesta03\n\nCesta con bombones (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/cestas/cesta-03.jpg\n\n";
    } 
if ($cesta04== "on") {$email_content .= "cesta04\n\nCesta con vino (consultar precio)\n\nhttp://www.floresemanuelle.es/recursos/img/cestas/cesta-04.jpg\n\n";
    } 
if ($funeral01== "on") {$email_content .= "funeral01\n\nCorona funeral (180 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/funerales/funeral-01.jpg\n\n";
    } 
if ($funeral02== "on") {$email_content .= "funeral02\n\nCentro de flores (80 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/funerales/funeral-02.jpg\n\n";
    } 
if ($funeral03== "on") {$email_content .= "funeral03\n\nCorona funeral (90 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/funerales/funeral-03.jpg\n\n";
    } 
if ($funeral04== "on") {$email_content .= "funeral04\n\nCentro de flores (80 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/funerales/funeral-04.jpg\n\n";   
    }
if ($oferta01== "on") {$email_content .= "oferta01\n\nDocena de rosas (30 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/ofertas/oferta-01.jpg\n\n";
    } 
if ($oferta02== "on") {$email_content .= "oferta02\n\nCesta de plantas (29 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/ofertas/oferta-02.jpg\n\n";
    } 
if ($oferta03== "on") {$email_content .= "oferta03\n\nOrquídea (20 Euros)\n\nhttp://www.floresemanuelle.es/recursos/img/ofertas/oferta-03.jpg\n\n";
    } 

    // Build the email headers.
    $email_headers = "Sender: $nombre <$email>";

    // Send the email.
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Redirect to the index.html page with success code
    header("Location: http://www.floresemanuelle.es/index.php?success=1#formulario");

?>