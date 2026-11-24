function listarUsuarios() {
    let xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let usuarios = JSON.parse(this.responseText);
            let tabela = document.getElementById("tabelaUsuarios");
            let linhas = "";

            for (let i = 0; i < usuarios.length; i++) {
                linhas += "<tr>";
                linhas += "<td>" + usuarios[i].matricula + "</td>";
                linhas += "<td>" + usuarios[i].nome + "</td>";
                linhas += "<td>" + usuarios[i].email + "</td>";
                linhas += "<td><button class='btn btn-excluir' onclick='excluirUsuario(\"" + usuarios[i].matricula + "\")'>Excluir</button> ";
            linhas += `<a href='edit.html?matricula=${encodeURIComponent(usuarios[i].matricula)}&nome=${encodeURIComponent(usuarios[i].nome)}&email=${encodeURIComponent(usuarios[i].email)}' class='btn btn-editar'>Editar</a></td>`;
                linhas += "</tr>";
            }

            tabela.innerHTML = linhas;
        }
    }
    xmlhttp.open("GET", "../PHP/usuarios/listUser.php", true);
    xmlhttp.send();
}