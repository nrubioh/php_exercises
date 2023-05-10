<?php

class CharmanderException extends Exception
{
    public function getCharmander(){
        return "chaaarrr";
    }
}
class SquirtleException extends Exception
{
    public function getSquirtle(){
        return "squireeel";
    }
}

try {
    $exception = readline("Throw one Exceptions: ");

    if ($exception == "charmander") 
        throw new CharmanderException("wrong Charmander");
    else 
        throw new SquirtleException("wrong Squirtle");

} catch (CharmanderException $e) {
    echo $e->getMessage()."\n";
    echo $e->getCharmander();
}
catch (SquirtleException $e) {
    echo $e->getMessage()."\n";
    echo $e->getSquirtle()."\n";
} finally {
    echo "anyways";
}