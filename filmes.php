<?php
// Lista inicial de filmes
$filmes = [
    ["id" => 1, "titulo" => "Matrix", "ano" => 1999],
    ["id" => 2, "titulo" => "Vingadores: Guerra Infinita", "ano" => 2018],
    ["id" => 3, "titulo" => "Vingadores: Ultimato", "ano" => 2020],
    ["id" => 4, "titulo" => "Interstellar", "ano" => 2014],
    ["id" => 5, "titulo" => "Capuchinho Vermelho: A Nova Aventura", "ano" => 2011],
    ["id" => 6, "titulo" => "Senhor dos aneis", "ano" => 2001],
    ["id" => 7, "titulo" => "Interestelar", "ano" => 2014],
    ["id" => 8, "titulo" => "Homem aranha", "ano" => 2017]
];

echo "<h1>Lista de Filmes</h1>";
echo "<ul>";
foreach ($filmes as $filme) {
    echo "<li>{$filme['id']} - {$filme['titulo']} ({$filme['ano']})</li>";
}
echo "</ul>";
?>