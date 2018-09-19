<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       $tecnologia = ['CSS', 'HTML' , 'Javascript', 20];
       $tecnologia [] = 'Python';
        ?>
        <pre>
        <?php
                print_r($tecnologia)
        ?>
        </pre>
        <pre>
        <?php
            var_dump($tecnologia)
        ?>
        </pre>
    </body>
</html>
<pre>
<h1>
    <?php
        function saludar (){
            echo 'Hola a todos';
    }  
    saludar();
    ?>
    </h1>
</pre>
    <?php
                //funcion parametros
        function usuario ($nombre, $tel){
            echo 'Nombre: '. $nombre ;
            echo 'Telefono: '. $tel. '<br>';
        }
        echo '<br>';
        $usuarios = ['David', 'Felipe'];
        usuario($usuario,319287);        
    ?>
    <?php
    function suma ($num1, $num2){
        $sumar = $num1 + $num2;
        return $sumar;
    } 
        $result = suma (2,4);
        echo 'Sumar : ' . $result;
     ?>   
    <?php
    $agenda = array();
    function agenda($nombre){
        global $agenda;     //accede a los datos 
        $agenda [] = $nombre;
        $agenda [] = $tel;
    }
    agendar ("Felipe", 12345);
    print_r($agenda);
?>


