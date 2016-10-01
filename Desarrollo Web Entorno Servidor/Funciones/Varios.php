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


        <form action="Varios.php" method="post">
            <label for="dato1">valor1</label>	
            <input type="text" name="dato1" id="dato1">
            <label for="dato1">valor2</labe>
            <input type="text" name="dato2" id="dato2"><br>
            <button name="aceptar" >Enviar</button><br>

        </form>        




        <?php
        if (isset($_REQUEST['aceptar'])) {

            $valor1 = $_REQUEST['dato1'];
            $valor2 = $_REQUEST['dato2'];
            //Prueba capicua
            if (capicua($valor1)) {
                echo'Es capicua';
            } else {
                echo 'No es capicua';
            }


            //Prueba primo siguiente

            echo"<br> El siguiente primo es :" . primoSiguiente($valor2);
            
            
            //Prueba la funcion cuenta digitos
            
            echo '<br>Los digitos que tiene valor1 son :'.digitos($valor1) . '<br>';
            
            //Prueba la funcuion voltea
            echo 'Estos son los numeros alreves :' . voltea($valor2);
        }



        // Funciones ///////////////////////////////////////////////

        /**
         * Capicua
         * Comprueba si un número entero positivo es capicua o no.
         * 
         * 
         * @param n
         * @return  <code>true</code> si el número es capicua
         */
        function capicua($n) {

            // número de una cifra
            if ($n < 10) {
                return true;
            }

            // número de dos cifras
            if (floor(($n >= 10)) && floor(($n < 100))) {
                if (floor(($n / 10)) == floor(($n % 10))) {
                    return true;
                }
            }

            // número de tres cifras
            if (floor(($n >= 100)) && floor(($n < 1000))) {
                if (floor(($n / 100)) == floor(($n % 10))) {
                    return true;
                }
            }

            // número de cuatro cifras
            if (floor(($n >= 1000)) && floor(($n < 10000))) {
                if ((floor(($n / 1000)) == floor(($n % 10))) && ((floor(( $n / 100 ) % 10)) == (floor(($n / 10) % 10)))) {
                    return true;
                }
            }

            // número de cinco cifras
            if (floor($n >= 10000)) {
                if ((floor(($n / 10000)) == floor(($n % 10)) ) && ((floor((($n / 1000) % 10))) == floor((($n / 10) % 10)))) {
                    return true;
                }
            }

            if (floor($n >= 100000)) {
                if ((floor(($n / 100000)) == floor(($n % 10)) ) && ((floor((($n / 10000) % 10))) == floor((($n / 10) % 10)))) {
                    return true;
                }
            }

            return false;
        }

// Funciones ///////////////////////////////////////////////

        /**
         * SIGUIENTE_PRIMO
         * Comprueba si un número entero positivo es primo o no y muestra el primo
         * siguiente.
         * Un número es primo cuando únicamente es divisible entre
         * él mismo y la unidad.
         * 
         * @param x un número entero positivo
         * @return  <code>true</code> si el número es primo
         */
        function primoSiguiente($x) {
            $n;

            $x++;

            do {


                $n = true;
                for ($i = 2; $i < $x; $i++) {
                    if (floor(($x % $i)) == 0) {
                        $n = false;
                    }
                }

                $x++;
            } while (!$n);
            $x-=1;
            return $x;
        }

// Funciones /////////////////////////////////////////////

        /**
         * CUENTA_DIGITOS
         *  Cuenta el número de dígitos de un número entero.
         *  
         * 

         * @param n
         * @return  <code>true</code> si el número es primo
         */
        function digitos($n) {

            $digitos = 0;




            while ($n > 0) {

                $n = floor($n / 10);
                $digitos++;
            }

            return $digitos;
        }

// Funciones ///////////////////////////////////////////////

        /**
         * PRIMO
         * Comprueba si un número entero positivo es primo o no.
         * Un número es primo cuando únicamente es divisible entre
         * él mismo y la unidad.
         * 
         * @param x un número entero positivo
         * @return  <code>true</code> si el número es primo
         */
        function esPrimo($x) {

            for ($i = 2; $i < $x; $i++) {
                if (($x % $i) == 0) {
                    return false;
                }
            }

            return true;
        }

// Funciones ///////////////////////////////////////////////

        /**
         * POTENCIA
         *  Escribe un programa que pida una base y un exponente (entero positivo)
         *  y que calcule la potencia.
         * 
         * @param exponente
         * @param base
         * @return  <code>true</code> si el número es primo
         */
        function fPotencia($base, $exponente) {
            $potencia = 1;

            if ($exponente == 0) {
                $potencia = 1;
            }

            if ($exponente > 0) {
                for ($i = 0; $i < $exponente; $i++) {
                    $potencia *= $base;
                }
            }

            if ($exponente < 0) {
                for ($i = 0; $i < $exponente; $i++) {
                    $potencia *= $base;
                }

                $potencia = floor(1 / $potencia);
            }
            return $potencia;
        }

       // Funciones ///////////////////////////////////////////////

          /**
         * VOLTEA UN NUMERO
         * voltea: Le da la vuelta a un número.

         * @param n
         * @return <code>true</code> si el número es primo
         */
        /**
         * voltea: Le da la vuelta a un número.
         * @param n
         * @return <code>true</code> si el número es primo
         */
          function voltea ($n){ 
          $num;
          $dividido = $n;
          $volteado=0;
          // número de una cifra
          while ( $dividido != 0) {
          $num = floor($dividido % 10);
          $dividido =  floor($dividido / 10);
          $volteado = $volteado * 10 + $num;
          }

          return $volteado;
          }


          // Funciones ///////////////////////////////////////////////


          /**
         * DE  VUELVE EL DIGITO DE LA POSICION N
         * digitoN: Devuelve el dígito que está en la posición n de un número entero. Se
         * empieza contando por el 0 y de izquierda a derecha.
         * 
         * @param posicion
         * @param numeroIntroducido
         * @return <code>true</code> si el número es primo
         */
        /*         * public static int digitoN( int  numeroIntroducido ,  int posicion ){ 


          int digito=1;//primer contador
          int auxposic;//la auxilliar de las posiciones (el tamaño)
          int i = 0;// guarda el digito N pero tambien si hay detras de el los guarda
          int aux=0;// esta yah guarda el digito N sin sobras.

          // comprueba la posición
          while(numeroIntroducido>0){


          if (digito==posicion){
          i= numeroIntroducido;

          }

          numeroIntroducido=numeroIntroducido/10;


          digito++;
          }
          int x=1;//segundo contador
          int auxI=voltea(i);//volteo el numero denuevo para eliminar los que sobran y los guardo en auxI
          auxposic=digitos(i);// esta la uso de auxiliar y para que guarde el tamaño en digitos que tiene el numero, elimirnar los que sobran

          // borra los que sobran
          while(auxI>0){

          if(x==auxposic){
          aux=auxI;

          }

          auxI=auxI/10;
          x++; //el que cuenta los digitos que sobran rotados
          }

          return aux;
          }


          // Funciones ///////////////////////////////////////////////

          /**
         * Da la posición de la primera ocurrencia de un dígito dentro de
         * un número entero. Si no se encuentra, devuelve -1.
         * 
         * @param digito
         * @param numeroIntroducido
         * @return 
         */

        /** public static int posicionDeDigito(int numeroIntroducido, int digito){ 


          int posicion=1;
          int P = -1;


          // comprueba la posición
          while (numeroIntroducido > 0) {

          if ((numeroIntroducido % 10) == digito) {

          P=posicion;//guarda las posiciones para madarla con un return
          numeroIntroducido=0;
          }
          numeroIntroducido /= 10;
          posicion++;
          } // while


          return P;
          }



          // Funciones ///////////////////////////////////////////////


          /**
         * Le quita digitos por detras digitos de un numero entero
         * Le quita a un número ,n dígitos por detrás (por la derecha).
         * @param digitosIntro
         * @param n
         * @return <code>true</code> si el número es primo
         */
        /*         * public static int quitaPorDetras (int digitosIntro,int n){ 
          int num=1;

          while (num <= n) {
          n--;// N es la cantidad de digitos que le quitaran
          digitosIntro  = digitosIntro /10;

          }

          return digitosIntro;
          }
          // Funciones ///////////////////////////////////////////////


          /**
         * Agrega  digitos en el final del numero
         * Añade un dígito a un número por detrás.
         * @param digitosIntro
         * @param digito
         * @return <code>true</code> si el número es primo
         */
        /*         * public static String pegaPorDetras (int digitosIntro , int digito){ 
          String numero = String.valueOf(digitosIntro);
          String digit = String.valueOf(digito);

          return numero + digit;

          }

          // Funciones ///////////////////////////////////////////////


          /**
         * Agrega  digitos en el final del numero
         * Añade un dígito a un número por detrás.
         * @param digitosIntro
         * @param digito
         * @return <code>true</code> si el número es primo
         */
        /*         * public static String pegaPorDelante(int digitosIntro , int digito){ 

          String numero = String.valueOf(digitosIntro);
          String digit = String.valueOf(digito);

          return  digit +  numero;

          }


          // Funciones ///////////////////////////////////////////////


          /**
         * Toma como parámetros las posiciones inicial y final dentro de un
         * número y devuelve el trozo correspondiente.
         * @param digito
         * @param PosInicial
         * @param PosFin
         * @return
         */
        /*         * public static String trozoDeNumero(int digito,int PosInicial , int PosFin){ 


          String  posicionInicial = String.valueOf(digitoN(digito, PosInicial));//cambia de entero a cadena de caracteres
          String  posicionFinal = String.valueOf(digitoN(digito, PosFin));

          return  posicionInicial + posicionFinal;

          }

          // Funciones ///////////////////////////////////////////////


          /**
         * Pegados numero distintos 
         * Pega dos números para formar uno.
         * @param PosInicial
         * @param PosFin
         * @return
         */
        /*         * public static String juntaNumeros(int PosInicial , int PosFin){ 


          String  posicionInicial = String.valueOf(PosInicial);//cambia de entero a cadena de caracteres
          String  posicionFinal = String.valueOf(PosFin);

          return  posicionInicial + posicionFinal;

          }


          // Funciones ///////////////////////////////////////////////


          /**
         * Muestra los números primos que hay entre 1 y 1000.
         * @param arrhay
         * @return 
         */
        ?>
    </body>
</html>
