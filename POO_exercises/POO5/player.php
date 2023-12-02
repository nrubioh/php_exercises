<?php

/* 
Los metodos constructores lo hice de forma protegida y no privada debido a que queria acceder a ellos desde los otros documentos
mage.php & warrior.php

Las modificaciones que hice fueron las siguientes 
DAMAGE METHOD = informa sobre el dano pero el ATTACK METHOD es el que lo aplica reduciendo los puntos de salud 
ATTACK METHOD = tmb llama al metodo morir si es que los puntos de vida bajaron o son iguales a [0].

pd: el personaje geiLadin hace una referencia a los bloodElfPaladins de world of warcraft.
pdd: YARE YARE DAZE
*/

class Player
{
    protected $strName;
    protected $intStr;
    protected $intInt;
    protected $intDef;
    protected $intHp;

    public function __construct(string $name, int $strength, int $intelligence, int $defense, int $healthPoint)
    {
        $this->strName = $name;
        $this->intStr = $strength;
        $this->intInt = $intelligence;
        $this->intDef = $defense;
        $this->intHp = $healthPoint;
    }

    public function levelUp(int $strength,int $intelligence, int $defense)
    {
        $this->intStr += $strength;
        $this->intInt += $intelligence;
        $this->intDef += $defense;
        return "**Congratulations you have leveled up**\n\n";
    }

    public function getAttributes()
    {
        $arrayAttributes= array(
            'Name' => $this->strName,
            'Strength' => $this->intStr,
            'Intelligence' => $this->intInt,
            'Defense' => $this->intDef,
            'Health Point' => $this->intHp
            );
        return $arrayAttributes;
    }

    public function damage($player_damage,$enemy_def)
    {
        $damageDone = $player_damage->intStr - $enemy_def->intDef;
        if($damageDone < 0){
            $damageDone = 0;
        } 
        echo "The damage done by {$player_damage->strName} to {$enemy_def->strName} was: {$damageDone}\n";
        return $damageDone;
    }

    public function attack($damageDone,$enemy_def)
    {
        $totalHP = $enemy_def->intHp - $damageDone;
            if ($totalHP > 0){
                $enemy_def->intHp = $totalHP;
                echo "Actual Enemy`s Life: {$enemy_def->getAttributes()['Health Point']}\n";
        } else {
                $enemy_def->isDead();
        }
    }

    public function isDead() 
    {
        $this->intHp = 0;
        echo "the {$this->strName} has died... Health Points left: {$this->getAttributes()['Health Point']} \n";
    }

    public function getStr()
    {
        $this->intStr;
        echo "The actual Str value is: [{$this->getAttributes()['Strength']}]\n";
        return;
    }

    public function setStr($value)
    {
        if($value > 0){
            $this -> intStr = $value;
            echo "The actual Str value is: [{$this->getAttributes()['Strength']}]\n";
        } else {
            error_log("you can`t to put a negative value!");
        }
    }
}

$player1 = new Player("Kamachanca", 9, 5, 7, 250);
$player2 = new Player("GeiLadin", 7, 6, 15, 9);

$damageDone = $player1->damage($player1, $player2);
echo $player1->attack($damageDone,$player2);

/* $player1->isDead();
$arrayPlayerInfo = $player1->getAttributes();
print_r ($arrayPlayerInfo); */


