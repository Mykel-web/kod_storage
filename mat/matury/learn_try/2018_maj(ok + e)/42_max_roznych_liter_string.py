file = open("sygnaly.txt", "r")
dane = file.read().splitlines()

print(dane)

rozna_ilosc = 0
rozna_slowo = "0"
rozna_litery = []
for wiersz in dane:
    for znak in wiersz:
        #wyciagniecie roznych liter z wiersza
        if znak not in rozna_litery:
            rozna_litery.append(znak)
    #dopisanie max
    if len(rozna_litery) > rozna_ilosc:
        rozna_ilosc = len(rozna_litery)
        rozna_slowo = wiersz
    rozna_litery.clear()
print(rozna_slowo, " ", rozna_ilosc)
