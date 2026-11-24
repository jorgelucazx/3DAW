const params = new URLSearchParams(window.location.search);
const matricula = params.get("matricula");

// Espera o HTML carregar para preencher os campos
window.onload = function() {
    document.getElementById("name").value = params.get("name") || params.get("nome") || "";
    document.getElementById("email").value = params.get("email") || "";
};

function atualizarUsuario() {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;

    if (name !== "" && email !== "" && matricula) {
        let xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("mensagem").innerText = "Usuário atualizado com sucesso!";
            }
        };

        xmlhttp.open("GET", "../PHP/usuarios/updateUser.php?name=" +name + "&email=" + email + "&matricula=" +matricula);
        xmlhttp.send();
    }
}