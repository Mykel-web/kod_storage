
# WRITE ...
plik = open("pliki/test.txt", "w")
plik.write(input(" WRITE: ") + "\n")
plik.close()


# APPEND ...
plik = open("pliki/test.txt", "a")
znaki = plik.write(input(" APPEND: ") + "\n")
plik.close()
print("zapisano ", znaki, " znakow")

# READ ...
plik = open("pliki/test.txt", "r")
print(plik.read())
plik.close()


# READ LINE ...
print("plik.readlines()")
plik = open("pliki/test.txt", "r")
tekst = plik.readlines()
print(tekst)
for i in tekst:
    print(i)

plik.close()
plik = open("pliki/test.txt", "r")
print("for l in plik")
for linia in plik:
    print(linia)
