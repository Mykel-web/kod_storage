file = open("liczby.txt", "r")
dane = file.read().splitlines()
liczby = list(map(int, dane))

print(liczby)
temp_5 = [0, 0, 0, 0, 0]
trojki = []
piatki = []

for liczba in liczby:
    temp_5[0] = liczba

    for dwa in range(len(liczby)):
        if liczby[dwa] % liczba == 0 and liczby[dwa] not in temp_5:
            temp_5[1] = liczby[dwa]

            for trzy in range(len(liczby)):
                if liczby[trzy] % liczby[dwa] == 0 and liczby[trzy] not in temp_5:
                    temp_5[2] = liczby[trzy]
                    if [liczba, liczby[dwa], liczby[trzy]] not in trojki:
                        trojki.append([liczba, liczby[dwa], liczby[trzy]])

                    for cztery in range(len(liczby)):
                        if liczby[cztery] % liczby[trzy] == 0 and liczby[cztery] not in temp_5:
                            temp_5[3] = liczby[cztery]

                            for piec in range(len(liczby)):
                                if liczby[piec] % liczby[cztery] == 0 and liczby[piec] not in temp_5:
                                    temp_5[4] = liczby[piec]
                                    if [liczba, liczby[dwa], liczby[trzy], liczby[cztery], liczby[piec]] not in piatki:
                                        piatki.append([liczba, liczby[dwa], liczby[trzy], liczby[cztery], liczby[piec]])
                                temp_5[4] = 0
                        temp_5[3] = 0
                temp_5[2] = 0
        temp_5[1] = 0
print("\nOdpowiedz: \n")
print("trojek : ", len(trojki))
for trojka in trojki:
    print(trojka)

print("piatek : ", len(piatki))

kokos = 0
for a in liczby:
    for b in liczby:
        for c in liczby:
            if c % b == 0 and b % a == 0 and a != b and b != c and a != c:
                kokos += 1
print("kokos", kokos)

# for odp in trojki:
#    print(odp)
