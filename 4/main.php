<?php 
    function classUploader($className) {
        include("classes/$className.php");
    }

    spl_autoload_register('classUploader');

    session_start();

    $instance_classA_1 = new ClasseA();
    $instance_classA_2 = new ClasseA();

    echo "Propiedades de base de la ClasseA";
    
    echo "<br>Instancia 1: ";
    var_dump($instance_classA_1);
    echo "<br> Instancia 2: ";
    var_dump($instance_classA_2);
    echo "<br><br>";
    
    // Creamos la propiedad
    $x = "nueva propiedad";
    
    echo "Añadimos propiedades a la instancia de ClasseA";
    $instance_classA_1->prodiedad_undefined = $x;

    echo "<br>Instancia 1: ";
    var_dump($instance_classA_1);
    echo "<br> Instancia 2: ";
    var_dump($instance_classA_2);
    echo "<br><br>";


    echo "Creamos una nueva instancia para ver si la porpiedad se ha añadido a la clase";
    $instance_classA_3 = new ClasseA();
    
    echo "<br>";
    var_dump($instance_classA_3);
?>