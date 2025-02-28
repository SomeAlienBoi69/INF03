function showBlock(blok) {

    const blok1 = document.getElementById("blok1")
    const blok2 = document.getElementById("blok2")
    const blok3 = document.getElementById("blok3")

    blok1.style.display = "none"
    blok2.style.display = "none"
    blok3.style.display = "none"

    const chosenBlock = document.getElementById(blok)

    chosenBlock.style.display = "block"
}
let szerokosc = 4
function changeBar() {
    const pasek = document.getElementById("pasek")
    szerokosc += 12
    if (szerokosc > 100) szerokosc = 100

    pasek.style.width = szerokosc + "%"
}

function confirm() {
    alert("działa")
    const imie = document.getElementById("imie").value
    const nazwisko = document.getElementById("nazwisko").value
    const dataUrodzenia = document.getElementById("dataUrodzenia").value
    const ulica = document.getElementById("ulica").value
    const numer = document.getElementById("numer").value
    const miasto = document.getElementById("miasto").value
    const numerTelefonu = document.getElementById("numerTelefonu").value
    const rodo = document.getElementById("rodo").checked

    console.log(imie+','+nazwisko+','+dataUrodzenia+','+ulica+','+numer+','+miasto+','+numerTelefonu+','+rodo)
}