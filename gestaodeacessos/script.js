function validarFormulario() {
    const senha = document.getElementById('senha').value;
    const mensagem = document.getElementById('mensagem');

    if (senha.length !== 4) {
        mensagem.textContent = 'A senha deve ter 4 dígitos.';
        return false;
    }

    mensagem.textContent = 'Dados enviados com sucesso!';
    return true;
};
window.onload = function() {
    document.body.classList.add('fade-in');
};

document.getElementById('submit').addEventListener('click', function() {
    document.getElementById('message').style.display = 'block';
});