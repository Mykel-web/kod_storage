file = open("napisy.txt", "r")
dane = file.read().splitlines()
file.close()

haslo = ""
liczby = []
ile_x = 0
for wiersz in dane:
    znaki = ""
    for znak in wiersz:
        if znak.isnumeric():
            znaki += znak
    if len(znaki) > 0:
        liczby.append(znaki)
print(liczby)

for liczba in liczby:
    if len(liczba) % 2 == 0:
        for i in range(len(liczba)):
            if i % 2 == 0:
                kod = liczba[i] + liczba[i+1]
                if int(kod) >= 65 and int(kod) <= 90:
                    haslo += chr(int(kod))
                    if chr(int(kod)) == 'X':
                        ile_x += 1
                        if ile_x == 3:
                            break
    else:
        for i in range(len(liczba) - 1):
            if i % 2 == 0:
                kod = liczba[i] + liczba[i+1]
                if int(kod) >= 65 and int(kod) <= 90:
                    haslo += chr(int(kod))
                    if chr(int(kod)) == 'X':
                        ile_x += 1
                        if ile_x == 3:
                            break
    if ile_x == 3:
        break
    
print(haslo)