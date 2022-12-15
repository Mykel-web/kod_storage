file = open("dane_2103\galerie.txt", "r")
dane = file.read().splitlines()

max_pow = 0
max_miasto = ""
min_pow = 9999999
min_miasto = ""
for wiersz in dane:
    col = 0
    miasto = ""
    wymiary = []
    liczba = ""
    for znak in wiersz:
        if col == 1:
            miasto += znak
        if col > 1:
            if znak == " ":
                wymiary.append(liczba)
                liczba = ""
            else:
                liczba += znak
        if znak == " ":
            col += 1
    wymiary.append(liczba)
    
    #druga czesc

    liczba = ""
    ile = 0
    powierzchnia = 0
    lokale = []
    for i in range(0,len(wymiary) - 1, 2):
        if wymiary[i] != '0':
            lokal = int(wymiary[i]) * int(wymiary[i+1])
            if lokal not in lokale:
                lokale.append(lokal)
    ile = len(lokale)
    if ile > max_pow:
        max_pow = ile
        max_miasto = miasto
    if ile < min_pow:
        min_pow = ile
        min_miasto = miasto
    wymiary.clear()
print("max: ", max_miasto, " ", max_pow)
print("min: ", min_miasto, " ", min_pow)

