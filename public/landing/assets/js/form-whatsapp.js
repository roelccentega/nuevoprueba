
document.querySelector("#submit").addEventListener("click", e => {
    e.preventDefault();

//INGRESE UN NUMERO DE WHATSAPP VALIDO AQUI:
let telefono = "51966176059";

let name = document.querySelector("#name").value;
let project = document.querySelector("#project").value;
let topic = document.querySelector("#topic").value;
let phone = document.querySelector("#phone").value;
let email = document.querySelector("#email").value;
let resp = document.querySelector("#respuesta");

resp.classList.remove("fail");
resp.classList.remove("send");

let url = `https://api.whatsapp.com/send?phone=${telefono}&text=
		*INFORMACIÓN DE MI PAQUETE DE PROMOCIÓN*%0A%0A
		*¿Cuál es tu nombre?*%0A
		${name}%0A
		*Cuéntanos un poco sobre tu proyecto*%0A
		${project}%0A
		*Que servicio va más acorde de tu negocio*%0A
		${topic}%0A
		*Número Telefonico*%0A
		${phone}%0A
		*Correo Electronico*%0A
		${email}`;

if (name === "" || project === "" || phone === "") {
    resp.classList.add("fail");
    resp.innerHTML = `Faltan algunos datos, ${name}`;
    return false;
}
resp.classList.remove("fail");
resp.classList.add("send");
resp.innerHTML = `Se ha enviado tus datos, ${name}`;

window.open(url);
});

//formulario 2


