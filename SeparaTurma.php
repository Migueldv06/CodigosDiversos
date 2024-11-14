<?php
$arquivoturma = array();

$file = fopen("lista_Nomes.csv", 'r');

while (($line = fgetcsv($file, 1000, "\t")) !== false) {
    list($Diretoria, $nome, $email, $Nível_do_Conhecimento, $Conhecimento_Exigido, $CURSO, $TURMA) = $line;

    if (!isset($arquivoturma[$TURMA])) {
        $arquivoturma[$TURMA] = array();
    }

    $arquivoturma[$TURMA][] = "$nome,$email";
}
fclose($file);

foreach ($arquivoturma as $turma => $alunos) {
    $conteudo = implode("\n", $alunos);

    file_put_contents("CSVs/alunos_$turma.csv", $conteudo);
}
