/*Creamos una variable llamada select y le decimos que va a ser igual a un selector de documento y decimos que traiga los
elementos de la pagina que tiene id #select lo mismo lo haremos con la variable opciones*/
const select = document.querySelector('#select');
const opciones = document.querySelector('#opciones');
/*Creamos un variable contenidoselect en la cual podremos llamar la opcion seleccionada por el usuario */
const contenidoSelect = document.querySelector('#select .contenido-select');
/* Agregamos otra variable hiddeninput que sera para tener los datos seleccionados en el input creado en html  */
const hiddenInput = document.querySelector('#inputSelect');


/* Aca accedemos a todos las opciones y decimos que cada una de la opciones tenga un evento lo hacemos con el foreach
 y decimos que por cada click que se haga en una opcion lo sobre ponga en el titulo */
document.querySelectorAll('#opciones > .opcion').forEach((opcion) => {
	opcion.addEventListener('click', (e)/*Parametro e es el elemento */ => {
		e.preventDefault();
		contenidoSelect.innerHTML = e.currentTarget.innerHTML /*para decir que el codigo html de contenido select sea 
		igual al de e */;
		select.classList.toggle('active');/* Para quitar la clase activa del select para quitar sus caracteristicas */
		opciones.classList.toggle('active');/* Para ocultar las opciones  */
		hiddenInput.value = e.currentTarget.querySelector('.titulo').innerText; /* para decir que el evento que recibio
		el click lo ponga en el titulo */
	});
});

/* Creamos un evento de forma de lista este sera de tipo click para que cuando de click le aparezca la clase active y
cuando la vuelva a clickear la quite lo mismo sera con opciones */
select.addEventListener('click', () => {
	select.classList.toggle('active');
	opciones.classList.toggle('active');
});