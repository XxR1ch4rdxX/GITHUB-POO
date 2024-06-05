function b1() {
    
    alert("hola");
    var tabla = document.getElementsByName("tablas").value;

    if (tabla === '1') {
        document.getElementById("cont1").style.display = "block";
    } else {
        document.getElementById("cont1").style.display = "none";
    }
}