function confirmacion(event) {
    if (confirm("¿Esta seguro de eliminar este producto?")) {
        return true;
    }else{
        event.preventDefault();
    }
}

let linkDelete = document.querySelectorAll(".eliminar");

for (var i = 0; i < linkDelete.length ; i++) {
    linkDelete[i].addEventListener('click', confirmacion);
    
}