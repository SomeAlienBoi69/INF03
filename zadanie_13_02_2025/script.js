function oblicz() {
    const pole1 = document.getElementById("pole1");
    const pole2 = document.getElementById("pole2");
    const wynik = document.getElementById("wynik")
    let powierzchnia = 0
    if (pole1.value != "" && pole2.value != "") {
        powierzchnia = 2.7 * pole1.value*2 + 2.7 * pole2.value * 2
        wynik.innerHTML = "Powierzchnia całkowita ścian:" + powierzchnia.toFixed(2) + "<br>Koszt malowania:" + 8*powierzchnia.toFixed(2)
    }
}