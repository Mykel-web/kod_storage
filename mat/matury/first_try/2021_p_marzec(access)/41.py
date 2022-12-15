file = open("dane_2103\galerie.txt", "r")
dane = file.read().splitlines()
print(dane[0])
kraje = []
kraje_rozne = []
for wiersz in dane:
    kraj = ""
    for znak in wiersz:
        if znak == " ":
            break
        kraj += znak
    if kraj not in kraje_rozne:
        kraje_rozne.append(kraj)
    kraje.append(kraj)
for kraj in kraje_rozne:
    print(kraj, kraje.count(kraj))
