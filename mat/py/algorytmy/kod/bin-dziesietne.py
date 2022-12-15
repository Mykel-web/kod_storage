def bindec(bin):
    wynik = int(bin[0])
    for i in range(1, len(bin)):
        wynik = wynik * 2 + int(bin[i])
    return wynik

print(bindec("1010"))