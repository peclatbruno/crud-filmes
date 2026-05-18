<?php
// Lista inicial de filmes
$filmes = [
    ["id" => 1, "titulo" => "Matrix", "ano" => 1999],
   ["id" => 2, "titulo" => "Vingadores: Guerra Infinita", "ano" => 2018],
     ["id" => 3, "titulo" => "Vingadores: Ultimato", "ano" => 2020]
    ];

echo "<h1>Lista de Filmes</h1>";
echo "<ul>";
foreach ($filmes as $filme) {
    echo "<li>{$filme['id']} - {$filme['titulo']} ({$filme['ano']})</li>";
}
echo "</ul>";
?>