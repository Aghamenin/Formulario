function salvarDados() {
    const nome = document.getElementById('nome').value;
    const email = document.getElementById('email').value;

    const resultado = document.getElementById('resultado');
    resultado.innerHTML = `Nome: ${nome}<br>E-mail: ${email}`;
}

