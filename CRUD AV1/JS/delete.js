    function excluirUsuario(matricula){

        let xmlhttp = new XMLHttpRequest;

        xmlhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                console.log("Resposta chegou : " +this.responseText);
                listarUsuarios();
            }
            else if(this.readyState<4){
                console.log("Resposta:"+this.readyState);
            }
            else{
                console.log("Requisiçao falhou : " + this.readyState);
            }
        }
        xmlhttp.open("GET","http://localhost:3000/PHP/usuarios/deleteUser.php?matricula="+matricula);
        xmlhttp.send();



    }
