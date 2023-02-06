const search = document.querySelector('input[placeholder="search memes"]');
const memeContainer = document.querySelector(".memes");

search.addEventListener("keyup", function (event) {
    if (event.key === "Enter") {
        event.preventDefault();

        const data = {search: this.value};
        fetch("/search", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        }).then(function (response) {
            return response.json();
        }).then(function (memes) {
            memeContainer.innerHTML = "";
            loadMemes(memes)
        })
    }

});

function loadMemes(memes) {
    memes.forEach(meme => {
        console.log(meme);
        createMeme(meme);
    })
}

function createMeme(meme) {
    const template = document.querySelector("#memes-template");

    const clone = template.content.cloneNode(true);

    const image = clone.querySelector("img");
    image.src = `/public/uploads/${meme.image}`;
    const title = clone.querySelector("h2");
    title.innerHTML = meme.title;
    const description = clone.querySelector("p");
    description.innerHTML = meme.description;
    /*const like = clone.querySelector(".fa-solid fa-thumbs-up");
    like.innerText = meme.like;
    const dislike = clone.querySelector(".fa-solid fa-thumbs-down");
    dislike.innerText = meme.dislike;*/

    memeContainer.appendChild(clone);
}