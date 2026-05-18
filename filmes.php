<?php
// Lista inicial de filmes
$filmes = [
    ["id" => 1, "titulo" => "Matrix Reloaded", "ano" => 2003],  // linha modificada
    ["id" => 2, "titulo" => "Interestelar", "ano" => 2014],
    ["id" => 3, "titulo" => "Avatar", "ano" => 2009],           // filme novo
];

echo "<h1>Lista de Filmes</h1>";
echo "<ul>";
foreach ($filmes as $filme) {
    echo "<li>{$filme['id']} - {$filme['titulo']} ({$filme['ano']})</li>";
}
echo "</ul>";
?>
