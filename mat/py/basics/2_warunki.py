liczba1 = int(input("podaj liczbe 1: "))
liczba2 = int(input("podaj liczbe 2: "))
if liczba1 > liczba2:
    print(liczba1, " wieksza niz ", liczba2)
elif liczba1 == liczba2:
    print(liczba1, " rowna ", liczba2)
else:
    print(liczba1, " mniejsza niz ", liczba2)

wiek = int(input("podaj wiek 1: "))
kasa = int(input("podaj kase 2: "))

if not wiek < 18 and not kasa < 40:
    print("okej (18lat) i (40 kasy)")
if wiek <=10 or kasa >=40:
    print("albo mniej niz 10 lat albo placisz 40")
