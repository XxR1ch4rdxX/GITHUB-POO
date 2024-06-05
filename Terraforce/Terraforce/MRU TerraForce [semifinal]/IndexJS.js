

function range(valor) {
    // Muestra el valor actual en un elemento de texto
    document.getElementById('edad').textContent = valor;
}

function b1() {

    //con este boton se mostraran los modales
    document.getElementById('overlay').style.display = 'flex';
    document.getElementById('modal').style.display = 'block';

}

function atras() {
    document.getElementById('overlay').style.display = 'none';
    document.getElementById('modal').style.display = 'none';
    document.getElementById("userm").value = ""
    document.getElementById("passm").value = ""
}




function b2() {
    //con este boton se mostraran los modales
    document.getElementById('overlay1').style.display = 'flex';
    document.getElementById('modal1').style.display = 'block';

}

function atras1() {
    document.getElementById('overlay1').style.display = 'none';
    document.getElementById('modal1').style.display = 'none';
}

function crud(){
    window.open('crud.html')
}


//pila

class pila {

    constructor() {
        this.usuarios = ['ADMIN',]
        this.passwords = ['password']
        this.nombre = []
        this.apellido = []
        this.correo = []
        this.numerouser=0
    }

    push(user, pass, name, appel, mail) {
        this.usuarios.push(user)
        this.passwords.push(pass)

        this.nombre.push(name)
        this.apellido.push(appel)
        this.correo.push(mail)
    }



}

const monton = new pila()


function aceptar1() {

    var avatar = document.getElementById("avatarindex")
            var avatardiv = document.getElementById("avatarusuario")

            var file = avatar.files[0];

            if (file) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    avatardiv.style.backgroundImage = 'url(' + e.target.result + ')';
                };
                reader.readAsDataURL(file);
            } else {
                // Manejar el caso en el que no se ha seleccionado ningún archivo
                avatarContainer.style.backgroundImage = 'none';
            }
    const pass = document.getElementById("pass1").value
    const confirm = document.getElementById("pass2").value
    const user = document.getElementById("username1").value

    const name = document.getElementById("name").value
    const apell = document.getElementById("apellido").value
    const mail = document.getElementById("mail").value

    const edad = document.getElementById("edad").value

    if (pass && user && name && name && apell && mail && edad != "") {

        if (confirm == pass) {
            monton.push(user, pass, name, apell, mail)
            monton.numerouser++
            alert("Cuenta creada")
            document.getElementById('overlay1').style.display = 'none';
            document.getElementById('modal1').style.display = 'none';

            document.getElementById("pass1").value = ""
            document.getElementById("pass2").value = ""
            document.getElementById("username1").value = ""

            document.getElementById("name").value = ""
            document.getElementById("apellido").value = ""
            document.getElementById("mail").value = ""

        } else {
            alert("Las contrasenas no coinciden")
        }

    } else {
        alert("Falta algun campo por rellenar")
    }
}




function aceptar() {
   
    const usuarios = monton.usuarios;
    const contras = monton.passwords;  

    const user = document.getElementById("userm").value;
    const pass = document.getElementById("passm").value;

    const indexu = usuarios.indexOf(user);
    const indexp = contras.indexOf(pass);  
    console.log(usuarios, contras)
    console.log(indexu, indexp)

    if (user && pass !== "") {

        if (indexu == -1 || indexp == -1) {
            alert("Usuario o contraseña incorrectos");

        } else if (contras[indexu] == pass) {

            window.open('Home.html');
            document.getElementById('overlay').style.display = 'none';
            document.getElementById('modal').style.display = 'none';
            document.getElementById("overlay3").style.display = 'flex';
        }
    } else {
        alert("Falta un campo por rellenar");
    }





}

