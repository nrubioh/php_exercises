<?php
/* 
El metodo setWeapon es una funcion estatica 
lo tuve que hacer de esa forma por que (CHATGPT hahaha), me dijo que era lo ideal para devolver la variable 
y ponerla como un atributo al momento de crear a un personaje
$player3 = new Warrior("CrazyDog", 13, 3, 9, 200, Warrior::setWeapon());
esta fn esta en un loop while para que unicamente se acabe si escribo alguna de las palabras correspondientes
*/

require_once("player.php");
class Warrior extends Player 
{
    protected $intWeapon;

    public function __construct(string $name, int $strenght, int $intelligence, int $defense, int $healthPoint, int $weapon)
    {
        parent::__construct($name,$strenght,$intelligence,$defense,$healthPoint);
        $this->intWeapon = $weapon;
    }

    public function getAttributes()
    {
        $arrayAttributes= array(
            'Name' => $this->strName,
            'Strength' => $this->intStr,
            'Intelligence' => $this->intInt,
            'Defense' => $this->intDef,
            'Health Point' => $this->intHp,
            'Weapon Type' => $this->intWeapon
            );
        return $arrayAttributes;
    }

    public static function setWeapon() //$player3->setWeapon() , public method error
    {
        $weaponChoice = '';
        while (true)
        {
            echo 'Pick your weapon: '."\n".
            'sword, WD = 7'."\n".
            'hammer, WD = 11'."\n".
            'axe, WD = 8'."\n";
            echo 'Write down your weapon: ';

            $weaponChoice = trim(fgets(STDIN)); // ==readline()      
            switch ($weaponChoice) {
                case 'sword':
                    $weaponChoice = 7;
                    break;
                case 'hammer':
                    $weaponChoice = 11;
                    break;
                case 'axe':
                    $weaponChoice = 8;
                    break;
                default:
                    echo 'you must to choice a weapon, try again!...';
                    continue 2; //loop inside
            }   
            break;      
        }
        return $weaponChoice;
    }

    public function damage($player_damage,$enemy_def)
    {
        $damageDone = ($player_damage->intStr + $player_damage->intWeapon ) - $enemy_def->intDef;
        if($damageDone < 0){
            $damageDone = 0;
        } 
        echo "The damage done by {$player_damage->strName} to {$enemy_def->strName} was: {$damageDone}\n\n";
        return $damageDone;
    }
}

$player3 = new Warrior("CrazyDog", 13, 3, 9, 200, Warrior::setWeapon());

$damageDone = $player3->damage($player3, $player2);
echo $player3->attack($damageDone,$player2);

print_r ($player3->getAttributes());