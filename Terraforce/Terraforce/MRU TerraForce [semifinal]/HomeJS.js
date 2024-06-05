
class Post {
    //creamos la clase post , que tendra propiedades como encabezado o descripción
    constructor(header,description,upload){
        this.header=header;
        this.description=description;
        this.upload=upload;
        this.puntero=null;
    }

}

class ListaE{
    constructor(){
        this.head=null;
        this.tail=null;
        this.length=0;
    }
  
    //Creamos el append para añadir una publicación
    append(header,description,upload) {
        const post = new Post(header,description,upload);
        if (!this.head) {
            this.head = post;
            this.tail = post;
        } else {
            this.tail.puntero = post;
            this.tail = post;
        }
        this.length++;

        //verificación de si hay publicaciones o nel
        if (this.head === null) {
            alert("No hay publicaciones qure borrar");
            return;
        }
        //Aquí guardaremos las publicaciones en forma de lista
        let show = this.head;
        let listHTML = '<ul>'; //Inicia una lista en una etiqueta de lista desordenada

        while (show) {  // Inicia un while que recorre cada nodo de la lista enlazada.
            listHTML += `<li><font size="6"><strong>${show.header}</strong></font> <br><br> <font size="4">${show.description}</font> <br><br> <font size="4"><img src="${show.upload}" alt="Imagen de la publicación"></font><br><br><br></li>`;
            
            // Para cada nodo se agrega una etiqueta de lista (<li>)
            show = show.puntero; // Mueve 'show' al siguiente nodo de la lista.
        }

        listHTML += '</ul>'; // Cierra la etiqueta de lista desordenada cuando acaba el while

        document.getElementById("content").innerHTML = listHTML;
    }

    deletePost() {
        if (this.head === null) {
            return; // No pasará nada si la lista está vacía
        }

        // Comprobación de si hay un solo nodo en la lista
        if (this.head.puntero === null) { 
            this.head = null;
            this.tail = null;
        } else {    // Hay más de un nodo en la lista
            let current = this.head;
            let pre = null;

            while (current.puntero !== null) {
                pre = current;
                current = current.puntero;
            }

            pre.puntero = null;
            this.tail = pre;
        }

        this.length--;
        this.append();
    }

}
//Instancia de ListaE
const single = new ListaE();

        function createpublication() {
            document.getElementById('overlaypublication').style.display = 'flex';
            document.getElementById('modalpublication').style.display = 'block';
        }

        function ssubmit() { //Obtendremos los valores de header,description,upload y
                            //los guardaremos aquí
            document.getElementById('overlaypublication').style.display = 'none';
            document.getElementById('modalpublication').style.display = 'none';

            let header = document.getElementById("header").value;
            let description = document.getElementById("description").value;
            //let upload = document.getElementById("picpublication").files[0].name;
            //single.append(header,description,upload);
            //Ya lo de abajo si sirve, pero podemos quitarlo y ponerlo como el de arriba
            let uploadInput = document.getElementById("picpublication");

    if (uploadInput.files.length > 0) {
        let file = uploadInput.files[0];
        let reader = new FileReader();

        reader.onload = function (e) {
            let upload = e.target.result;
            single.append(header, description, upload);
        };

        reader.readAsDataURL(file);
    } else {
        alert("Por favor, selecciona una imagen");
        document.getElementById('overlaypublication').style.display = 'flex';
            document.getElementById('modalpublication').style.display = 'block';
    }
}
            


       // function borrar(){
        //    single.deleteNode();
       // }

       function back() {
        document.getElementById('overlaypublication').style.display = 'none';
        document.getElementById('modalpublication').style.display = 'none';
       }

       function borrar(){
        single.deletePost();
    }
    
//let avatar=document.getElementById("avatarfinal")
//avatar.style.backgroundImage="url('Sources/admin1.png')"


//function subirfoto(){
    //let avatar=document.getElementById("avatarindex")
    //avatar
//}

//function aceptar1(){
    
//}

