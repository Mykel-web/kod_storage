file = open("identyfikator.txt", "r")
dane = file.read().splitlines()

print(dane)


def palindrom(lista):
    for i in range(len(lista)):
        if lista[i] != lista[len(lista) - 1 - i]:
            return False
    return True


ide_pali = []
seria = []
numer = []
for ide in dane:
    for znak in ide:
        if not znak.isdigit():
            seria.append(znak)
        else:
            numer.append(znak)
    if palindrom(seria) or palindrom(numer):
        print(ide)
    seria.clear()
    numer.clear()
