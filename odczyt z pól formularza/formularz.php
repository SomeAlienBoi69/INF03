<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz osobowy</title>
</head>
<body>
    <h1>Formularz osobowy</h1>
    <form action="wynik.php" method="POST">
        Imię:<input type="text" name="imie"><br>
        Nazwisko:<input type="text" name="nazwisko"><br>
        Wiek:<input type="number" name="wiek"><br>
        Email:<input type="email" name="email"><br>
        Wiadomość:<textarea name="wiadomosc" cols="30" rows="4"></textarea><br>
        Język programowania:
        <select name="jezyk">
            <option value="PHP">PHP</option>
            <option value="C++">C++</option>
            <option value="Kotlin">Kotlin</option>
            <option value="JavaScript">JavaScript</option>
        </select><br>
        Płeć:<br>
        <input type="radio" value="Mężczyzna" name="plec" checked="checked">Mężczyzna<br>
        <input type="radio" value="Kobieta" name="plec">Kobieta<br>
        <input type="radio" value="Inna" name="plec">Inna<br>
        Zgoda na przetwarzanie danych:
        <input type="checkbox" name="zgoda"><br>
        <input type="reset" value="Wyczyść">
        <input type="submit" value="Prześlij">
    </form>
    
</body>
</html>