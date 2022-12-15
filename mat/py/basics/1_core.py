from math import sqrt as pierwiastek  # importy

abs(5) #wartosc bezgledna
#continue - przejscie do kolejnego i w petli
slownik = {kraj = "kraj"} #zamiast lista.index(lista.search)
liczba = 5
print("for x in range(liczba start(wlacnie), liczba koncowa(do <), iteracja np -1)")  # 1 for
for x in range(liczba-1, 0, -1):
    print(x)

liczby = [1]  # 2 lists
liczby.append(2)

print(liczby[::-1])  # 3 odwrot listy
liczby[0:10:2]  # 3 jak z for
print("kotara", "kotara"[::-1])  # 3

# string.replace (imie na nazwisko)
print("imie twoje.replace(): ".replace("imie", "nazwisko"))

# split na spacji do listy
print("michal split: ", '"michal split:"'.split(' '))

# odcina na poczatku i koncu: (a,b,spacja,\n) SPACJE I \n dla .strip()
print(" \n\n  aaab tekst.strip():    bbb\n".strip('ab \n'))


print("'a'.isdigit()", 'a'.isdigit())  # check czy liczba

for i in enumerate([10, 12, 50, 21]):  # enumerate(list) tworzy i=[numer,wartosc]
    print("numer = ", i[0], "wartosc = ", i[1])
# adv
lista = ['2', 2,4,4.5]  
print("map: ", lista)

lista2 = list(map(int, lista))  # lista_nowa  = list(map(funkcja, lista))
print(lista2)

lista2 = list(map(lambda x: x * 2, lista2)) # lista_nowa  = kazdy element * 2
print(lista2)

print("filter: ")
lista2 = list(filter(lambda x: x > 5, lista2)) # pokazuje wartosci spelniajace warunki (warunek jako funkcja)
print(lista2)

print("     pliki.reading():") # readowanie plikow

# READ LINE ...  # Wklada linie do arraya 
print("plik.readlines()")
plik = open("core.txt", "r")
tekst = plik.readlines()
print(tekst)

# READ ...    # Tworzy string ze wszystkim gownem 
print("plik.read()")
plik = open("core.txt", "r")
print(plik.read())
plik.close()

# reading linii bez \n
print("file.read().splitlines()")
file = open("core.txt", "r")
dane = file.read().splitlines()
print(dane)

#stripniecie ich
dane2 = []
for i in dane:
    dane2.append(i.strip())
print(dane2)

