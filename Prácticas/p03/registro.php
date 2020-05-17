<?php
$pais=array
(
"espana" =>array
   (
   "nombre"=>"España",
   "lengua"=>"Castellano",
   "moneda"=>"Peseta"
   ),
"francia" =>array
   (
   "nombre"=>"Francia",
   "lengua"=>"Francés",
   "moneda"=>"Franco"
   )
);
    echo $pais["espana"]["moneda"] //Saca en pantalla: "Peseta"
?>