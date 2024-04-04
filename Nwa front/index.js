let alumnos = [];

fetch("http://localhost:8000/api/alumnos")
  .then(function (response) {
    return response.json();
  })
  .then(function (data) {
    alumnos = data;
    console.log(alumnos);
    mostrarNombres(alumnos); // Llamada a la función dentro de la promesa
  });

function mostrarNombres(alumnos) {
  alumnos.forEach((alumno) => {
    let nombre = document.createElement("p"); // Corrección aquí
    nombre.textContent = alumno.nombre;

    let resultado = document.getElementById("nombres"); // Corrección aquí
    resultado.appendChild(nombre);
  });
}

function createAlumno() {
  fetch("http://localhost:8000/api/alumnos", {
    method: "POST",
    headres: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      nombre: "nombrePrueba1",
      apellido: "apellidoPrueba1",
      fecha_nac: "03/04/2024",
    }),
  })
    .then((response) => response.json())
    .then((data) => {
      console.log(data);
    })
    .catch((error) => console.error("Error: ", error));
}

createAlumno();
