<?php
// Lista inicial de filmes
$filmes = [
    ["id" => 1, "titulo" => "Matrix", "ano" => 1999],
    ["id" => 2, "titulo" => "Interstellar", "ano" => 2014],
    ["id" => 3, "titulo" => "Capuchinho Vermelho: A Nova Aventura", "ano" => 2011]
];

echo "<h1>Lista de Filmes</h1>";
echo "<ul>";
foreach ($filmes as $filme) {
    echo "<li>{$filme['id']} - {$filme['titulo']} ({$filme['ano']})</li>";
}
echo "</ul>";
?>
