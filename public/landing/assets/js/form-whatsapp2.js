
document.querySelector("#submit2").addEventListener("click", e => {
    e.preventDefault();

//INGRESE UN NUMERO DE WHATSAPP VALIDO AQUI:
let telefono2 = "51966176059";

let name2 = document.querySelector("#name2").value;
let project2 = document.querySelector("#project2").value;
let topic2 = document.querySelector("#topic2").value;
let phone2 = document.querySelector("#phone2").value;
let email2 = document.querySelector("#email2").value;
let resp2 = document.querySelector("#respuesta2");

resp2.classList.remove("fail");
resp2.classList.remove("send");

let url2 = `https://api.whatsapp.com/send?phone=${telefono2}&text=
		*INFORMACIÓN DE MI PAQUETE DE PROMOCIÓN*%0A%0A
		*¿Cuál es tu nombre?*%0A
		${name2}%0A
		*Cuéntanos un poco sobre tu proyecto*%0A
		${project2}%0A
		*Que servicio va más acorde de tu negocio*%0A
		${topic2}%0A
		*Número Telefonico*%0A
		${phone2}%0A
		*Correo Electronico*%0A
		${email2}`;

if (name2 === "" || project2 === "" || phone2 === "") {
    resp2.classList.add("fail");
    resp2.innerHTML = `Faltan algunos datos, ${name2}`;
    return false;
}
resp2.classList.remove("fail");
resp2.classList.add("send");
resp2.innerHTML = `Se ha enviado tus datos, ${name2}`;

window.open(url2);
});
