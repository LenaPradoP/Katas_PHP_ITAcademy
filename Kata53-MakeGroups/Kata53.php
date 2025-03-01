<?php 
declare(strict_types = 1);

    $alumnos = ["Pere","Joan","Jesús","Mayte","Julia"];
    $numero = 2;
    
    /*Si el número son la cantidad de personas en cada grupo:

    print_r(createGroups($alumnos, $numero));

    function createGroups(array $alumnos, int $numero) : array
    {
        shuffle($alumnos);
        $grupos [] = array_chunk($alumnos, $numero);

    return $grupos;
    }

    No tiene mucho sentido que se quede una persona sola en el último grupo, la añadiría al anterior
    aunque así también se rompa la lógica de que cada grupo tiene que tener N personas. 
    */
    
    // Si el número es la cantidad de grupos, como entendimos inicialmente:

    function createGroups($alumnos, $numero) 
    {
    $tamañoGrupos = (ceil(count($alumnos)/$numero));
    echo "$tamañoGrupos";
    $grupos = [];
    $index = 0;

    while ($index < count($alumnos)) {
    $grupos[] = array_chunk($alumnos, $tamañoGrupos);
    $index += $tamañoGrupos;
    }

return $grupos;

}
?>






