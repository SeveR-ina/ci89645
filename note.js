var list = document.getElementById("list");

function addToList(nameOfNote) {
    var option = document.createElement("option");
    option.textContent = nameOfNote;
    list.appendChild(option);
}

var notes = JSON.parse(localStorage.getItem("notes")) || {"что купить": ""};

for (var name in notes)
    if (notes.hasOwnProperty(name))
        addToList(name);

function saveToStorage() {
    localStorage.setItem("notes", JSON.stringify(notes));
}

var textArea = document.getElementById("textArea");
textArea.value = notes[list.value];

list.addEventListener("change", function () {
    textArea.value = notes[list.value];
});

textArea.addEventListener("keyup", function () {
    notes[list.value] = textArea.value;
    saveToStorage();
});

function addNote() {
    var nameOfNote = prompt("Тема заметки", "");
    if (!nameOfNote) return;
    if (!notes.hasOwnProperty(nameOfNote)) {
        notes[nameOfNote] = "";
        addToList(nameOfNote);
        saveToStorage();
    }
    list.value = nameOfNote;
    textArea.value = notes[nameOfNote];
}