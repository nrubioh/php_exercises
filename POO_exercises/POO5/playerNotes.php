<?php

$isAlive = $pj_pelao1->myPlayerIsAlive($pj_pelao1->getAttributes()['Health Point']);

$arrayPlayerInfo = $pj_pelao1->getAttributes(); //1
    print_r ($arrayPlayerInfo);
    echo "\n\n";
    
print_r ($pj_pelao1->getAttributes()); //2

$lvlUP = $pj_pelao1->levelUp(50, 30, 20); //1
    print_r ($lvlUP);
    echo "\n\n";
echo $pj_pelao1->levelUp(50, 30, 20); //2

$pj_pelao1->strName = "CAMACHANKA!!!";
    echo "Your new name will be: {$pj_pelao1->strName}\n\n";

$arrayPlayerInfo = $pj_pelao1->getAttributes();
    print_r ($arrayPlayerInfo);

$arrayPlayerInfo = $pj_allyElfPaladin->getAttributes();
    print_r ($arrayPlayerInfo);

$player1->setStr(5);


/* require_once("player.php"); */

class Warrior extends Player 
{
    protected $intWeaponDamage;

    public function __construct(string $name, int $strenght, int $intelligence, int $defense, int $healthPoint, int $WeaponDamage)
    {
        parent::__construct($name,$strenght,$intelligence,$defense,$healthPoint);
        $this->intWeaponDamage = $WeaponDamage;
    }

    public function getAttributes()
    {
        $arrayAttributes= array(
            'Name' => $this->strName,
            'Strength' => $this->intStr,
            'Intelligence' => $this->intInt,
            'Defense' => $this->intDef,
            'Health Point' => $this->intHp,
            'Weapon Damage' => $this->intWeaponDamage
            );
        return $arrayAttributes;
    }

    public function setWeaponDamage() //$player3->setWeaponDamage() , public method error
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
                break;
        }
        return $weaponChoice;
    }
}

$player3 = new Warrior("CrazyDog", 13, 3, 9, 200, 0);
$weaponDamage = $player3->setWeaponDamage();
$player3 = new Warrior("CrazyDog", 13, 3, 9, 200, $weaponDamage);
print_r ($player3->getAttributes());


