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