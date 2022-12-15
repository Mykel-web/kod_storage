file = open("liczby.txt", "r")
liczby = file.read().splitlines()
liczby = list(map(int, liczby))
print(liczby)
print("Prosze czekać to zajmie nie dłużej niż minutę")


def wspolnydzielnik(lista):
    mini = lista[0]
    for i in range(len(lista)):
        if lista[i] < mini:
            mini = lista[i]
    if mini == 2:
        koniec = 3
    else:
        koniec = mini
    najwiekszy_dzielnik = 0
    for dzielnik in range(2, koniec + 1):
        licznik = 0
        for i in range(len(lista)):
            if lista[i] % dzielnik == 0:
                licznik += 1
        if licznik == len(lista):
            if dzielnik > najwiekszy_dzielnik:
                najwiekszy_dzielnik = dzielnik
    return najwiekszy_dzielnik


max_ciag = [0, 0, 0]
ciag = []
krotki = []
te_liczba = 0
kolejna = 0
for element in liczby:

    for liczba in range(kolejna, len(liczby)):

        krotki.append(liczby[liczba])
        ciag = ciag[:-1]
        temp_dzielnik = wspolnydzielnik(krotki)

        if temp_dzielnik > 0:
            ciag = krotki
            ciag_dzielnik = temp_dzielnik

        else:
            krotki.clear()
            kolejna += 1
            # zapisanie ciagu jesli jest najwiekszy
            if len(ciag) > max_ciag[1]:
                max_ciag[0] = ciag[0]
                max_ciag[1] = len(ciag)
                max_ciag[2] = ciag_dzielnik
            break

print("max ciag ", max_ciag)
