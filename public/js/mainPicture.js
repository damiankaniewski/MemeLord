const images = [];

for (let i = 0; i < 30; i++) {
    images.push(`https://picsum.photos/200?random=${i}`);
}
const usersSection = document.querySelector(".users");
const userDivs = usersSection.querySelectorAll("#name");

userDivs.forEach(div => {
    const randomImageIndex = Math.floor(Math.random() * images.length);
    div.style.backgroundImage = `url(${images[randomImageIndex]})`;
    div.style.backgroundSize = "cover";
    div.style.width = "150px";
    div.style.height = "150px";
});
