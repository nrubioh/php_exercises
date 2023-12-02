<?php
require_once("player.php");
class Mage extends Player
{
    protected $intStaff;

    public function __construct(string $name, int $strenght, int $intelligence, int $defense, int $healthPoint, int $staff)
    {
        parent::__construct($name,$strenght,$intelligence,$defense,$healthPoint); 
        {
            $this->intStaff = $staff;
        }
    }

    public function getAttributes()
    {
        $arrayAtributtes= array(
            'Name' => $this->strName,
            'Strenght' => $this->intStr,
            'Intelligence' => $this->intInt,
            'Defense' => $this->intDef,
            'Health Point' => $this->intHp,
            'Book Type' => $this->intStaff
            );
        return $arrayAtributtes;
    }

    public static function setStaff()
    {
        $staffChoice = '';
        while (true) 
        {
            echo 'Pick your staff: '."\n".
            '1.Crescent Staff, Staff_dmg = 3'."\n". //https://www.wowhead.com/classic/item=6505/crescent-staff
            '2.Staff of the Ruins, Staff_dmg = 7'."\n".//https://www.wowhead.com/classic/item=21452/staff-of-the-ruins
            '3.Brimstone Staff, Staff_dmg = 9'."\n"; //https://www.wowhead.com/classic/item=22800/brimstone-staff

            $staffChoice = trim(fgets(STDIN));
            switch ($staffChoice) {
                case '1':
                    $staffChoice = 3;
                    break;
                case '2':
                    $staffChoice = 7;
                    break;
                case '3':
                    $staffChoice = 9;
                    break;
                default:
                    echo 'you must to choice a weapon, try again!...';
                    continue 2;
            }
            break;
        }
        return $staffChoice;
    }

    public function damage($player_damage,$enemy_def)
    {
        $damageDone = ($player_damage->intInt + $player_damage->intStaff) - $enemy_def->intDef;
        if($damageDone < 0){
            $damageDone = 0;
        } 
        echo "The damage done by {$player_damage->strName} to {$enemy_def->strName} was: {$damageDone}\n\n";
        return $damageDone;
    }
}

$player4 = new Mage("OverMadafaker", 13, 3, 9, 200, Mage::setStaff());

$damageDone = $player4->damage($player4, $player2);
echo $player4->attack($damageDone,$player2);

print_r ($player4->getAttributes());
