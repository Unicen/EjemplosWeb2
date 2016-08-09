/*jslint browser:true */

function AgregarTarea() {
  var textoTarea = document.getElementById("tarea"); // Obtengo el campo de texto con la tarea
  var lista = document.getElementById("listaDeTareas"); // Obtengo la lista de tareas
  var item = document.createElement("li"); //Creo un nuevo item para la lista
  item.innerHTML = textoTarea.value; //Completo el item con el texto de la tarea
  lista.insertBefore(item, lista.getElementsByTagName("li")[0]); //Agrego el item en la primera posicion
}
