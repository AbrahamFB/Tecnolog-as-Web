<?php

    echo "<p>\$_myvar<br>Variable válida. Un nombre de una variable válido tiene que empezar con una letra o un guión bajo</p>";
    echo "<p>\$_7var;<br>Variable válida.</p>";
    echo "<p>myvar;<br>No es válida, porque la variable no inicia con \$. Uso de myvar constante indefinido: se supone 'myvar' (esto arrojará un error en una versión futura de PHP)</p>";
    echo "<p>\$myvar;<br>Variable válida.</p>";
    echo "<p>\$var7;<br>Variable válida.</p>";
    echo "<p>\$_element1;<br>Variable válida.</p>";
    echo "<p>\$house*5;<br>No es válida. Notice: Undefined variable ocurre cuando usas una variable en una operación, pero dicha variable no se ha definido con anterioridad</p>";
    
?>