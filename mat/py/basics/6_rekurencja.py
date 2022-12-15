def function1(x):
    return x * x
fun1 = function1
print(fun1(2))
def fun2(funkcja, liczba):
    return funkcja(liczba) * liczba
wynik = fun2(fun1, 2)
print(wynik)

def silnia(liczba):
    if liczba == 1:
        return liczba
    else:
        return liczba * silnia(liczba-1)

def iteracja(liczba):
    wynik = liczba
    for x in range(liczba-1, 0, -1):
        wynik = wynik * x
    return wynik

liczba = int(input("podaj liczbe "))
if liczba < 1:
    print("ty kurwo nie musi byc wieksza niz 0")
else:
    print("rekurencja: ")
    print(silnia(liczba))
    print("iteracja: ")
    print(iteracja(liczba))

