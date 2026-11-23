function cadastrar(){

    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let matricula = document.getElementById("matricula").value;

    let xmlhttp = new XMLHttpRequest;

    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status ==200){
            console.log("Resposta chegou : " +this.responseText);
        }
        else if(this.readyState<4){
            console.log("Resposta:"+this.readyState);
        }
        else{
            console.log("Requisiçao falhou : " + this.readyState);
        }
    }
    xmlhttp.open("GET","http://localhost:3000/PHP/usuarios/includeUser.php?name="+name+"&email="+email+"&matricula="+matricula);
    xmlhttp.send();



}