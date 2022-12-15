file = open("napisy.txt", "r")
dane = file.read().splitlines()

print(dane)
liczby = []
czy_liczba = False
# lista tyko z fragmentami z liczbami
for fragment in dane:
    for znak in fragment:
        if znak.isdigit():
            czy_liczba = True
    if czy_liczba:
        liczby.append(fragment)
    czy_liczba = False

print(liczby)
# zadanie
pary = []
haslo = ""
koniec = False
for fragment in liczby:
    if koniec:
        break
    for znak in fragment:
        if koniec:
            break
        if znak.isdigit():
            pary.append(znak)
            if len(pary) == 2:
                suma = pary[0] + pary[1]
                suma = int(suma)
                if 65 <= suma <= 90:
                    haslo += chr(suma)
                    if haslo.count('X') == 3:
                        koniec = True
                pary.clear()
    pary.clear()
print(haslo)
