file = open("instrukcje.txt", "r")
dane = file.read().splitlines()
instrukcje = []

for line in dane:
    a = line.split(" ")
    instrukcje.append(a)
print(instrukcje)

napis = []
for i in range(len(instrukcje)):
    if instrukcje[i][0] == "DOPISZ":
        napis.append(instrukcje[i][1])
    if instrukcje[i][0] == "ZMIEN":
        napis[len(napis) - 1] = instrukcje[i][1]
    if instrukcje[i][0] == "USUN":
        if len(napis) > 0:
            napis.pop(len(napis) - 1)
    if instrukcje[i][0] == "PRZESUN":

        for znak in range(len(napis)):
            if napis[znak] == instrukcje[i][1]:
                if napis[znak] != 'Z':
                    napis[znak] = chr(ord(napis[znak]) + 1)
                else:
                    napis[znak] = 'A'
                break
odpowiedz = ""
for znak in napis:
    odpowiedz += znak
print(odpowiedz)
