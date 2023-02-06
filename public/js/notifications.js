document.getElementById("fb").addEventListener("click", function () {
    window.open("https://www.facebook.com", "_blank");
});
document.getElementById("tw").addEventListener("click", function () {
    window.open("https://www.twitter.com", "_blank");
});
document.getElementById("ig").addEventListener("click", function () {
    window.open("https://www.instagram.com", "_blank");
});
document.getElementById("logout").addEventListener("click", function () {
    window.location.href = "http://localhost:9090/login";
});
