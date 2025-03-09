<?php
declare(strict_types = 1);

const VALID_ACTIONS = ['run', 'jump'];
const VALID_SECTIONS = ['_', '|'];

$actions = ["run", "jump", "run", "jump"];
$track = "_|_|";
evaluateRace($actions, $track);

function evaluateRace(array $actions, string $track): bool
{
    if (!isInputValid($actions, $track)) {
        return false;
    }
    
    $result = processRace($actions, $track);
    echo "Estado final de la pista: " . $result['finalTrack'] . PHP_EOL;
    echo "¿El atleta ha superado la carrera? " . ($result['success'] ? "Sí" : "No") . PHP_EOL;
    return $result['success'];
}

function isInputValid(array $actions, string $track): bool
{
    if (empty($actions) || empty($track)) {
        echo "Error: Las acciones o la pista no pueden estar vacías." . PHP_EOL;
        return false;
    }
    
    if (!validateLength($actions, $track)) {
        return false;
    }
    
    if (!validateActions($actions)) {
        return false;
    }
    
    if (!validateTrack($track)) {
        return false;
    }
    
    return true;
}

function validateLength(array $actions, string $track): bool
{
    if (count($actions) !== strlen($track)) {
        echo "Error: La longitud de las acciones (" . count($actions) . ") no coincide con la pista (" . strlen($track) . ")." . PHP_EOL;
        return false;
    }
    return true;
}

function validateActions(array $actions): bool
{
    foreach ($actions as $index => $action) {
        if (!in_array($action, VALID_ACTIONS, true)) {
            echo "Error: La acción '$action' en la posición $index no es válida." . PHP_EOL;
            return false;
        }
    }
    return true;
}

function validateTrack(string $track): bool
{
    $sections = str_split($track);
    foreach ($sections as $index => $section) {
        if (!in_array($section, VALID_SECTIONS, true)) {
            echo "Error: La sección '$section' en la posición $index no es válida." . PHP_EOL;
            return false;
        }
    }
    return true;
}

function processRace(array $actions, string $track): array
{
    $trackArray = str_split($track);
    $success = true;
    $actionsCount = count($actions);
    
    for ($i = 0; $i < $actionsCount; $i++) {
        [$trackArray[$i], $actionSuccess] = evaluateAction($actions[$i], $trackArray[$i]);
        if (!$actionSuccess) {
            $success = false;
        }
    }
    
    return [
        'finalTrack' => implode('', $trackArray),
        'success' => $success
    ];
}

function evaluateAction(string $action, string $section): array
{
    if ($action === 'run' && $section === '|') {
        return ['/', false];
    }
    if ($action === 'jump' && $section === '_') {
        return ['x', false];
    }
    return [$section, true];
}

?>