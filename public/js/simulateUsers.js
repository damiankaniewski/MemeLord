const names = [
    "Ace",
    "Bolt",
    "Comet",
    "Diamond",
    "Echo",
    "Flame",
    "Glow",
    "Hero",
    "Ice",
    "Jazz",
    "Killer",
    "Lion",
    "Mystic",
    "Night",
    "Ocean",
    "Pulse",
    "Quest",
    "Ranger",
    "Storm",
    "Thunder",
    "Universe",
    "Venture",
    "Whisper",
    "X-Ray",
    "Yellow",
    "Zebra",
    "Alpha",
    "Beta",
    "Gamma",
    "Delta",
    "Epsilon"
];

const parent = document.querySelector(".users");

for (let i = 0; i < 30; i++) {
    const div = document.createElement("div");
    div.id = "name";

    const h2 = document.createElement("h2");
    h2.textContent = names[i];

    div.appendChild(h2);

    const numberDiv = document.createElement("div");
    numberDiv.textContent = "Level: " + Math.floor(Math.random() * 101);

    div.appendChild(numberDiv);
    parent.appendChild(div);
}
