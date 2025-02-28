let numer = 1
function nextQuote() {

    numer += 1

    if (numer > 3) {
        numer = 1
    }

    const cytat1 = document.getElementById("cytat1")
    const cytat2 = document.getElementById("cytat2")
    const cytat3 = document.getElementById("cytat3")

    switch(numer) {
        case 1:
            cytat3.style.display = "none"
            cytat1.style.display = "block"
            break

        case 2:
            cytat1.style.display = "none"
            cytat2.style.display = "block"
            break

        case 3:
            cytat2.style.display = "none"
            cytat3.style.display = "block"
            break

    }
}