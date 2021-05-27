$uspdo<?php

include __DIR__ . "/Livro.php";


// CONEXAO
try {

    $conexao = new PDO("mysql:host=localhost;dbname=aula_de_hoje", "root", "root");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}

// INSERCAO DE REGISTROS
$data = date('Y-m-d H:i:s'); // O valor "segunda" não seria permitido; 
$titulo = "O senhor dos Anéis: A sociedade do Anel";
try {
    $sql = "INSERT INTO livros (create_time, update_time, titulo) VALUES('$data', '$data', '$titulo')";
    //$conexao->exec($sql);

    echo "o ultimo ID inserido foi :" . $conexao->lastInsertId();
} catch (PDOException $e) {
    echo "houve uma falha na insercao";
    file_put_contents("excecoes.txt", $e->getMessage(), FILE_APPEND);
}

//CONSULTA
//$sql = "SELECT * FROM aula_de_hoje.livros;";
$consulta  = $conexao->query("SELECT * FROM aula_de_hoje.livros;");
$resultado = $consulta->fetchAll(PDO::FETCH_CLASS, "Livro");

$livros = [];
foreach ($resultado as $livro) {
    $livroraiz = new Livro();
    $livroraiz->setId($livro->id);
    $livroraiz->setTitulo($livro->titulo);
    $livros[] = $livroraiz;
}



echo "<pre>";
print_r($livros);
echo "</pre>";
