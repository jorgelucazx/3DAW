function atualizarUsuario(matricula, nomeAtual, emailAtual) {
    let name = prompt("Digite o novo nome:", nomeAtual);
    let email = prompt("Digite o novo e-mail:", emailAtual);


    //o nome tem q estar preenchido
    
    if (name !== null && email !== null) {
        let xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                listarUsuarios();
            }
        };

        xmlhttp.open("GET", "../PHP/usuarios/updateUser.php?name=" + name + "&email=" + email + "&matricula=" + matricula, true);
        xmlhttp.send();
    }
}