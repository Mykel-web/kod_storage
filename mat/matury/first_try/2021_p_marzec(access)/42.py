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
    liczba = ""
    ile = 0
    powierzchnia = 0
    for i in range(0,len(wymiary) - 1, 2):
        if wymiary[i] != '0':
            ile += 1
        powierzchnia += int(wymiary[i]) * int(wymiary[i+1])
    wymiary.clear()
    print(miasto, " ", powierzchnia, " ", ile)
    if powierzchnia > max_pow:
        max_pow = powierzchnia
        max_miasto = miasto
    if powierzchnia < min_pow:
        min_pow = powierzchnia
        min_miasto = miasto
print('b\n')
print("najwieksza: ", max_miasto, " ", max_pow)
print("najmniejsza: ", min_miasto, " ", min_pow) 