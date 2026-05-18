<?php
// Lista inicial de filmes
$filmes = [
    ["id" => 1, "titulo" => "Senhor dos aneis", "ano" => 2001],
    ["id" => 2, "titulo" => "Interestelar", "ano" => 2014],
    ["id" => 3, "titulo" => "Homem aranha", "ano" => 2017]
];

echo "<h1>Lista de Filmes</h1>";
echo "<ul>";
foreach ($filmes as $filme) {
    echo "<li>{$filme['id']} - {$filme['titulo']} ({$filme['ano']})</li>";
}
echo "</ul>";
?>
