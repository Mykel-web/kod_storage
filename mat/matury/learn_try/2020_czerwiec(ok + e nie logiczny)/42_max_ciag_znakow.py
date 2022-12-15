file = open("pary.txt", 'r')
linie = file.readlines()
fragmenty = []
for line in linie:
    fragmenty.append(str(line).strip().split(' '))

tekst = []
for fragment in fragmenty:
    tekst.append(fragment[1])
fragmenty = tekst

print(fragmenty)
for fragment in fragmenty:
    max_znak = 'a'
    max_znak_ilosc = 0
    znak_ilosc = 1
    for i in range(len(fragment) - 1):
        znak = fragment[i]
        if fragment[i] == fragment[i + 1]:
            znak_ilosc += 1
            if i + 1 == len(fragment) - 1:
                if znak_ilosc > max_znak_ilosc:
                    max_znak = fragment[i]
                    max_znak_ilosc = znak_ilosc
                    znak_ilosc = 1
        else:
            if znak_ilosc > max_znak_ilosc:
                max_znak = fragment[i]
                max_znak_ilosc = znak_ilosc
            znak_ilosc = 1
    print(max_znak * max_znak_ilosc, max_znak_ilosc)
