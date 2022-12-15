def convert(binarn):
    x = 2
    wynik = int(binarn[len(binarn) - 1])
    i = len(binarn) - 2
    while i >= 0:
        wynik = wynik * x + int(binarn[i])
        i -= 1
    return wynik

liczba = "1011"
print(convert(liczba))