
wynik = ""
n = 10
while n > 0:
    r = n % 2
    wynik += str(r)
    n = n // 2
wynik = wynik[::-1]
print(wynik)