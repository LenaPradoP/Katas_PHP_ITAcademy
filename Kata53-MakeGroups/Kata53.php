<?php 
declare(strict_types=1);

// Si el número es la cantidad de personas en el grupo, como tenía apuntado que debería haber sido el enunciado:

$alumnos = ["Pere", "Joan", "Jesús", "Mayte", "Julia"];
$tamañoGrupos = 2;

$grupos = createGroups($alumnos, $tamañoGrupos);
printGroups($grupos);

function createGroups(array $alumnos, int $tamañoGrupos): array
{
    shuffle($alumnos);
    $grupos = array_chunk($alumnos, $tamañoGrupos);

    if (count($grupos) > 1 && count(end($grupos)) === 1) {
        $ultimo = array_pop($grupos);
        $grupos[count($grupos) - 1] = array_merge($grupos[count($grupos) - 1], $ultimo);
    }
    
    return $grupos;
}

function printGroups(array $grupos): void
{
    foreach ($grupos as $i => $grupo) {
        echo "Grup " . ($i + 1) . ": " . implode(" ", $grupo) . PHP_EOL;
    }
}

?>






