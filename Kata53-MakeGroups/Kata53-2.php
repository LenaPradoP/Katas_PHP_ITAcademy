<?php 
declare(strict_types = 1);

// Si el número es la cantidad de grupos, como entendimos inicialmente por el enunciado:

$alumnos = ["Pere", "Joan", "Jesús", "Mayte", "Julia"];
$numGrupos = 2;

$grupos = createGroups($alumnos, $numGrupos);
printGroups($grupos);

function createGroups(array $alumnos, int $numero): array
{
    shuffle($alumnos);
    $tamañoGrupos = (int) ceil(count($alumnos) / $numero);
    return array_chunk($alumnos, $tamañoGrupos);
}

function printGroups(array $grupos): void
{
    foreach ($grupos as $i => $grupo) {
        echo "Grup " . ($i + 1) . ": " . implode(" ", $grupo) . PHP_EOL;
    }
}

?>