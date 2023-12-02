<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repara este script</title>
    <style>
        .contenedor{
            width: 500px;
            position: absolute;
            left: 50%;
            margin-left: -250px;
        }
    </style>
</head>
<body>
    <div class="contenedor">
    <h1>Juego Piedra, Papel o Tijera</h1>
    <img src="https://miro.medium.com/max/1400/1*yHZKuUPofUf39CpZ6frmxw.png" width="310" height="130" alt="Piedra, Papel o Tijeras">
    <h2>Forma de juego:</h2>
    <p>Esquema de «piedra, papel o tijera». Cada elemento vence a uno de los otros dos, y a su vez es vencido por uno de ellos.</p>
    <form action="exercRepair.php" method="POST">
        <label for="j1">Jugador 1:</label>
        <select name="j1">
            <option value="pi">Piedra</option>
            <option value="pa">Papel</option>
            <option value="ti">Tijeras</option>
        </select>
        <p></p>
        <label for="j2">Jugador 2:</label>
        <select name="j2">
            <option value="pi">Piedra</option>
            <option value="pa">Papel</option>
            <option value="ti">Tijeras</option>
        </select>
        <p></p>
        <input type="submit" value="Verificar Ganador">
        <p></p>
    </form>
    <?php 
        if($_POST){
            $j1 = $_POST["j1"];
            $j2 = $_POST["j2"];
            if($j1=="pi" && $j2=="ti"){
                Ganador1();
            ?><b>El Jugador 1 Gana! [Piedra gana a Tijera]</b><?php
            }else{
                if($j1=="pa" && $j2=="pi"){
                    Ganador1();
                    ?><b>El Jugador 1 Gana! [Papel gana a Piedra]</b><?php
                }else{
                    if($j1=="ti" && $j2=="pa"){
                        Ganador1();
                        ?><b>El Jugador 1 Gana [Tijeras gana a Papel]</b><?php
                    }else{
                        if($j2=="pi" && $j1=="ti"){
                            Ganador2();
                            ?><b>El Jugador 2 Gana! [Piedra gana a Tijera]</b><?php
                        }else{
                            if($j2=="pa" && $j1=="pi"){
                                Ganador2();
                                ?><b>El Jugador 2 Gana! [Papel gana a Piedra]</b><?php
                            }else{
                                if($j2=="ti" && $j1=="pa"){
                                    Ganador2();
                                    ?><b>El Jugador 2 Gana [Tijeras gana a Papel]</b><?php
                                }else{
                                    Empate();
                                    ?><b>Ninguno Gana!: Empate! =c </b><?php
                                }
                            }
                        }
                    }
                }
            }
            ?>
            <a href="exercRepair.php"> Reiniciar Juego</a>
        <?php
        }
        function Ganador1(){
            ?><img src="https://cdn0.iconfinder.com/data/icons/people-137/513/gamer-512.png" 
            width="40" height="40">
        <?php
        }
        function Ganador2(){
            ?><img src="https://cdn0.iconfinder.com/data/icons/people-137/513/student-512.png" 
            width="40" height="40">
        <?php
        }
        function Empate(){
            ?><img src="https://cdn1.iconfinder.com/data/icons/unicons-line-vol-3/24/equal-circle-256.png"
            width="30" height="30">
        <?php
        }
            ?>
    </div>  
</body>
</html>