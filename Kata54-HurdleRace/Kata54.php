<?php 
declare(strict_types = 1);
// Un array que només pugui tenir strings amb les paraules "run" o "jump"
$atleta = ['run', 'run', 'jump', 'run', 'jump', 'run', 'run'];


enum Pista : String {
    case Tierra =  '_' ;
    case Valla =  '|' ;
}

function createTrack() 
{
    
}

function createAtleta()
{



}


function checkResult(array $atleta, string $pista) : bool 
{
    $result = false;

// Si l'atleta fa "run" en "_" (terra) i "jump" en "|" (tanca)
// Si fa "jump" en "_" (terra), variarà la pista per "x".
// Si fa "run" en "|" (tanca), es variarà la pista per "/".


    return $result;

}

?>