file = open("liczby.txt", "r")
dane = file.read().splitlines()
dane = list(map(int, dane))
print(dane)

czynniki = []
max_czynniki = 0
max_czynniki_liczba = 0

rozne = []
max_rozne = 0
max_rozne_liczba = 0
def rozklad(liczba):
    ran_liczba = liczba
    while not liczba == 1:
        for i in range(2, ran_liczba+1):
            if liczba % i == 0:
                liczba = liczba / i
                czynniki.append(i)
                break


for element in dane:
    rozklad(element)
    if len(czynniki) > max_czynniki:
        max_czynniki = len(czynniki)
        max_czynniki_liczba = element

    for czynnik in czynniki:
        if czynnik not in rozne:
            rozne.append(czynnik)

    if len(rozne) > max_rozne:
        max_rozne = len(rozne)
        max_rozne_liczba = element

    rozne.clear()
    czynniki.clear()
print("Odpowiedz")
print(max_czynniki_liczba, max_czynniki, max_rozne_liczba, max_rozne)

