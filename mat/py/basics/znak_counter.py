text = input("podaj tekst: ")
text = text.lower()
print(text)
znaki_slownik = {}
procenty = []


def znaki(text):
    for a in text:
        if a in znaki_slownik:
            znaki_slownik[a] += 1
        else:
            znaki_slownik[a] = 1


znaki(text)
for z in znaki_slownik.values():
    procenty.append(z)
for i in range(len(procenty)):
    procenty[i] = round(procenty[i] / len(text) * 100, 2)
i = 0
print("razem jest ", len(text), " znakow")
for key, value in znaki_slownik.items():
    print(key, " ", value, procenty[i], "%")
    i += 1
