file = open("liczby.txt", "r")
dane = file.read().splitlines()

print(dane)
liczby = []
ile = 0
pierwsza = ''
pierw = False
for liczba in dane:
    if liczba[0] == liczba[len(liczba)-1]:
        ile += 1
        if not pierw:
            pierwsza = liczba
            pierw = True
print("Odpowiedz ", ile, pierwsza)