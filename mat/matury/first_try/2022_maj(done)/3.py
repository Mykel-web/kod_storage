file = open("dane/liczby.txt", "r")
dane = file.read().splitlines()
liczby = list(map(int, dane))
print(liczby)

tojki = 0
ile_piatek = 0
piatka = []
for a in liczby:
    piatka.append(a)
    for b in liczby:
        if b % a == 0 and b not in piatka:
            piatka.append(b)
            for c in liczby:
                if c % b == 0 and c not in piatka:
                    tojki +=1 
                    piatka.append(c)
                    for d in liczby:
                        if d % c == 0 and d not in piatka:
                            piatka.append(d)
                            for e in liczby:
                                if e % d == 0 and e not in piatka:
                                    ile_piatek += 1
                            piatka.remove(d)
                    piatka.remove(c)
            piatka.remove(b)
    piatka.remove(a)
    
print(tojki, ile_piatek)