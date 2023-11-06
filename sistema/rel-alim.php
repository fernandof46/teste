<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém as informações enviadas
    $nomeAluno = $_POST['nome_aluno'];
    $turmaAluno = $_POST['turma_aluno'];
    $alimentacao = isset($_POST['alimentacao']) ? 'Sim' : 'Não';
    
    // Cria uma string com as informações
    $dados = "Nome do aluno: " . $nomeAluno . "\n";
    $dados .= "Turma do aluno: " . $turmaAluno . "\n";
    $dados .= "Deseja se alimentar hoje? " . $alimentacao . "\n";
    
    // Salva as informações em um arquivo
    $arquivo = 'alunos.txt';
    file_put_contents($arquivo, $dados, FILE_APPEND);
}

// Função para gerar o relatório
function gerarRelatorio() {
    // Lê o conteúdo do arquivo de alunos
    $arquivo = 'alunos.txt';
    $conteudo = file_get_contents($arquivo);
    
    // Separa as informações por linha
    $linhas = explode("\n", $conteudo);
    
    // Conta o número de alunos que desejam se alimentar
    $contador = 0;
    foreach ($linhas as $linha) {
        if (strpos($linha, 'Deseja se alimentar hoje? Sim') !== false) {
            $contador++;
        }
    }
    
    // Imprime o relatório
    echo "Quantidade de alunos que irão se alimentar: " . $contador;
}

// Verifica se o botão de gerar relatório foi clicado
if (isset($_POST['gerar_relatorio'])) {
    gerarRelatorio();
}
?>