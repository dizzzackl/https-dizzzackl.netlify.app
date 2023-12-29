var password_admin = 2010; // ваша переменная
var username_admin = "gera";

function checkCredentials() {
    var usernameInput = document.getElementById("username").value;
    var passwordInput = document.getElementById("password").value;

    if (parseInt(passwordInput) === password_admin) {
        console.log("Верный пароль");
        if (usernameInput === username_admin) {
            console.log("Верное имя пользователя");
            window.location.href = "admin_panel27032010.html"; // Редирект на страницу администратора
        } else {
            console.log("Неверное имя пользователя");
            window.location.href = "https://dizzzackl.netlify.app/html/404"; // Редирект на страницу ошибки
        }
    } else {
        console.log("Неверный пароль");
        window.location.href = "https://dizzzackl.netlify.app/html/404"; // Редирект на страницу ошибки
    }
}
