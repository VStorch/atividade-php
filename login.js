document.querySelector("#formLogin").addEventListener("submit", function(event) {
    const usuario = document.querySelector("#login").value;
    const senha = document.querySelector("#senha").value;

    if (usuario === "louvre" && senha === "louvre") {
        alert("Login válido!");
    } else {
        alert("Login ou senha incorretos!");
        event.preventDefault();
    }
});