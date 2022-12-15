file = open("dane/liczby.txt", "r")
dane = file.read().splitlines()
print(dane)
ile = 0
piersza = "0"
for liczba in dane:
    if liczba[0] == liczba[len(liczba) - 1]:
        ile += 1
        if piersza == "0":
            piersza = liczba
print(ile, piersza)