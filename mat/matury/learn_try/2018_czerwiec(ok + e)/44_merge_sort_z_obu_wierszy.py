file = open("dane1.txt", "r")
dane1 = file.read().splitlines()
file.close()
file = open('dane2.txt', "r")
dane2 = file.read().splitlines()
file.close()
liczby1 = []
liczby2 = []
for wiersz in range(len(dane1)):
    a = dane1[wiersz].split(" ")
    c = list(map(int, a))
    b = dane2[wiersz].split(" ")
    d = list(map(int, b))
    liczby1.append(c)
    liczby2.append(d)
print(liczby1)
print(liczby2)
scalone = []
for wiersz in range(len(liczby1)):
    wiersz1 = liczby1[wiersz]
    wiersz2 = liczby2[wiersz]
    l1 = 0
    l2 = 0
    gotow = []
    for i in range(20):
        if l1 > 9:
            gotow.append(wiersz2[l2])
            l2 += 1
        elif l2 > 9:
            gotow.append(wiersz1[l1])
            l1 += 1
        else:
            if wiersz1[l1] <= wiersz2[l2]:
                gotow.append(wiersz1[l1])
                l1 += 1
            else:
                gotow.append(wiersz2[l2])
                l2 += 1
    scalone.append(gotow)
zapis = open("wynik4_4.txt", "w")
tekst = ""
for wiersz in scalone:
    linia = ""
    for liczba in wiersz:
        linia += str(liczba) + " "
    linia += "\n"
    tekst += linia
zapis.write(tekst)
