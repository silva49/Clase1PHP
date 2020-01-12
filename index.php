<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <title>Mi primera página con php</title>
  </head>
     <body>
      <h1>Hola mundo! </h1>
        
       <form name="form1" method="POST" action="index.php">
           Número 1 : <input type="text" name="txtnumero1">
          <br>
          Número 2 : <input type="text" name="txtnumero2">

            <br>
          <input type="submit" name="calcular" value="Calcular">
              
        </form>

     <?php
      
      if(isset($_POST["calcular"])) {
         
         $valor1 = $_POST["txtnumero1"];
         $valor2 = $_POST["txtnumero2"];
 
         if($valor1 == ""  || $valor2 == "") {
             echo "<br> Debes diligenciar todos los campos";
             exit;
         } 
         
         echo $valor1 . "<br>";
          echo $valor2 . "<br>";
           


        echo "Hola,esto es php";
        $numero1 = $valor1;
        $numero2 = $valor2;
        
        $suma = $numero1 + $numero2;
         $resta = $numero1 - $numero2;
         $multiplicacion = $numero1 * $numero2;
         $division= $numero1 / $numero2;
         $residuo = $numero1 % $numero2; 
      
          echo "<br> la suma de  " . $numero1 . "  y  " . $numero2 . " es " . $suma;
          echo "<br> la resta de  " . $numero1 . "  y  " . $numero2 . " es " . $resta;
          echo "<br> la multiplicación de  " . $numero1 . "  y  " . $numero2 . " es " . $multiplicacion;    
          echo "<br> la división de  " . $numero1 . "  y  " . $numero2 . " es " . $division;
          echo "<br> el residuo de  " . $numero1 . "  y  " . $numero2 . " es " . $residuo;
  
          /**
           * operadores lógicos
           * Y = && O=||
           *cuando se usa el Y(&&) se debe tener en cuenta que es verdadero cuando todos los criterios evaluados son verdaderos.
           *cuando se usa el O (||) se debe tener en cuenta que es falsa cuando todos los criterios evaluados son dalsos
           */
      
         if($numero1 > $numero2 && $numero1 > 0) {
             echo "<br> La condición es vedadera.";
         } 
         else 
          {
            echo "<br> La condición es falsa.";
          }
         
          if($suma > $resta || $suma > $multiplicacion) {
            echo "<br>todavia sigo siendo verdadera";
          }
          else {
              echo "<br> ya soy falsa"; 
          }
       
          /**
           * Operadores relacionales
           * <menor que
           * > mayor que
           * >= mayor o igual que 
           * <= menor o igual que
           * = asignacion
           * ==comparacion (if)
           *  !negacion
           *  != diferente 
           */
  
        $numero3 = 7;
        echo "<br>";
         if($numero1>$numero2 && $numero1>$numero3) {
             echo  "el mayor es " . $numero1;
         } 
           elseif($numero2>$numero1 && $numero2>$numero3)
           {
               echo "el mayor es " . $numero2;
  
           }
            else {
                echo "el mayor es " . $numero3;
            }
       
       
         echo "<br>";     
         if( ($numero3%2)==0 ) {
             echo "el numero " . $numero3 . " es par";
         }
         else {
          echo "el numero " . $numero3 . " es impar";
         }
       
         echo "<br>";    
         /**
         * Uso del Switch
         *teniendo en cuenta los colores del semaforo realiza un algoritmo donde se indique qué :
         * Verde: avanzar
         * amarillo : aviso que debe detenerse
         * rojo : debe decir no avanzar.
         */
       
        $colorSemaforo = "Verde " ;
        
        switch (strtolower(trim($colorSemaforo))) {
             
          case "verde" :
             echo "semaforo en ". $colorSemaforo ." : Avanzar";
              break;  
              
              case "amarillo" :
              echo "semaforo en ". $colorSemaforo ." : Debe detenerse";
             break;
           
             case "rojo" :
              echo "semaforo en ". $colorSemaforo ." : No avanzar";
             break;
  
            default:
            echo "Valor Incorrecto";
            break;
  
  
          }
           echo "<br>";
          /**
           * Ciclos
           * 
           * for - while - do while
           */
           //while
           //realizar un ejercicio que muestre los primeros 5 numeros consecutivos
          $i = 1;
  
          while($i <= 5) {
              echo $i . "<br>";   
               $i++;
          }
       
           echo "<br>";
            //do while
   
            $i=1;
            do {
                echo $i ."<br>";
                $i++;
            } while($i <= 5);
      
            echo "<br>" ;   
            $valor = 5;
            $i=1;
            
           while($i <= 10) {
              $resultado  = $valor * $i;  
             echo "<br>" . $valor . " * " . $i . " = "   . $resultado;
             $i++;  
          }
           echo "<br>";
          //do while
         
          $valor = 5;
          $i=1;
          do {
          $resultado  = $valor * $i;  
          echo "<br>" . $valor . " * " . $i . " = " . $resultado;
          $i++;  
        } while($i <=10);
      
        echo "<br>";
        /**
        * creacion de vector
        */
       $array = array(1,2,3,4,5,6,7, "algo" ,"texto");
        
       $longitud = count($array);
  
       for($i=0; $i<$longitud; $i++) {
          echo $array[$i] . "<br>";         
       }
       echo "<br>";
     
       foreach($array as $valor) {
           echo $valor . "<br>";
       }
     
     
       $array = array(1,2,3,4,5,6,7,8,9,10);
       $numeros = count($array);
       for($i=1; $i<=$longitud; $i++) {
           $valor=5;
           $resultado = $valor * $array[$i];
  
           echo "<br>" . $valor . "*" . $array[$i] . "=" . $resultado;
       }
     
     
    
    }

     
   ?> 
   


  </body>
</html>