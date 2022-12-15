file = open("DANE/liczby.txt", "r")
dane = file.read().splitlines()

print(dane)
liczby_jeden = []
liczby_dwa = []
liczby_trzy = []
for liczba in dane:
    if liczba not in liczby_jeden:
        liczby_jeden.append(liczba)
    if dane.count(liczba) == 2:
        if liczba not in liczby_dwa:
            liczby_dwa.append(liczba)
    if dane.count(liczba) == 3:
        if liczba not in liczby_trzy:
            liczby_trzy.append(liczba)

jeden = len(liczby_jeden)
dwa = len(liczby_dwa)
trzy = len(liczby_trzy)

print("Odpowiedz:  ", jeden, dwa, trzy)
