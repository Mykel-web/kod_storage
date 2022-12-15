file = open("dane_pr/sygnaly.txt", "r")
dane = file.read().splitlines()
print(dane)
i_slow = 0
haslo = ""
for slowo in dane:
    i_slow += 1
    i_znak = 0
    for znak in slowo:
        i_znak += 1
        if i_znak == 10 and i_slow%40==0:
            haslo += znak
print(haslo)