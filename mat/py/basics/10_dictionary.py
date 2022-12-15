
slownik = {'id': 1, True: 'pedzel', 'nazwisko': 'pedzlowaty'}
slownik[2] = 'number'
slownik['wiek'] = 25
print(slownik)
print(slownik['nazwisko'])

print("dictonary.get: ")
print(slownik.get(False, "nie ma klucza True"))

print("petla.items: ")
for l in slownik.items():
    print(l)

print("petla.values: ")
for l in slownik.values():
    print(l)

print("adresy.pop: ")
adresy = {"anita": 22, "kolak": 25, "sui": 31}
adresy.pop("anita")
print(adresy)