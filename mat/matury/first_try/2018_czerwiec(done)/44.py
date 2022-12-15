file = open("dane\dane1.txt")
dane = file.read().splitlines()
dane1 = []
dane2 = []
for wiersz in dane:
    dane1.append(list(map(int, wiersz.split())))
file = open("dane\dane2.txt")
dane = file.read().splitlines()
for wiersz in dane:
    dane2.append(list(map(int, wiersz.split())))

zapis = open("wynik4_4.txt", "w") #clear pliku
zapis.write("")

zapis = open("wynik4_4.txt", "a")
for i in range(len(dane1)):
    scalony = []
    wiersz1 = dane1[i]
    wiersz2 = dane2[i]
    
    a = 0
    b = 0
    for j in range(20):
        if a == 10:
            scalony.append(wiersz2[b])
            b += 1
        elif b == 10:
            scalony.append(wiersz1[a])
            a += 1      
        else:
            if wiersz1[a] <= wiersz2[b]:
                scalony.append(wiersz1[a])
                a += 1
            else:
                scalony.append(wiersz2[b])
                b += 1 
    wiersz_scalony = ""
    for liczba in scalony:
        wiersz_scalony += str(liczba)
        wiersz_scalony += " "
    wiersz_scalony += '\n'
    zapis.write(wiersz_scalony)

    