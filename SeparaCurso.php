<?php
$arquivocurso = array();

$file = fopen("lista_Nomes.csv", 'r');

while (($line = fgetcsv($file, 1000, "\t")) !== false) {
    list($Diretoria, $nome, $email, $Nível_do_Conhecimento, $Conhecimento_Exigido, $CURSO, $TURMA) = $line;

    if (!isset($arquivocurso[$CURSO])) {
        $arquivocurso[$CURSO] = array();
    }

    $arquivocurso[$CURSO][] = "$nome-$email";
}
fclose($file);

foreach ($arquivocurso as $curso => $alunos) {
    $conteudo = implode("\n", $alunos);

    file_put_contents("CSVs/alunos_$curso.csv", $conteudo);
}