# string formatting
dane = ["\nmichal", 24]
kokos = {'imie': "ktos", 'nazwisko': "smieciowaty", 'wiek': 24}

text = "{0} drugged at {1}".format(dane[0], dane[1])
powitac = "Witaj {0} {1}, dzis masz {2}".format(kokos['imie'], kokos['nazwisko'], kokos['wiek'])
powitac2 = "Witaj {imie} {nazwisko}, dzis masz {wiek}".format(imie=kokos['imie'], nazwisko=kokos['nazwisko'],
                                                              wiek=kokos['wiek'])
print(text)
print(powitac)
print(powitac2)

print("\n-----stringi----- ")

lista = ["1", "2", "3", "4", "5"]
print(lista)
spacja = ' '
print(spacja.join(lista))

print("imie twoje.replace(): ".replace("imie", "nazwisko"))
tekst = "tekst.txt"
print("tekst.endswith(): ", tekst.endswith(".txt"))
print("tekst.startswith(): ", tekst.startswith(".txt"))
print("szukanie znaku, 'znak' in tekst: ", '.' in tekst)
print("tekst.upper(): ", tekst.upper(), tekst.lower())

tekst = "\n,,,, michal"
print(tekst, " split: ", tekst.split(' '))
print("tekst.strip(','): ", tekst.strip())

tekst = "123456dads"
print("\ntekst = string", tekst)
tekst = tekst[::-1]
print("tekst[::-1]", (tekst))
print("tekst[0].isdigit() ", tekst[0].isdigit())
