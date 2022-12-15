file = open("dane4.txt")
dane = file.read().splitlines()
liczby = list(map(int, dane))

luki = []
for i in range(len(liczby) - 1):
    luka = liczby[i+1] - liczby[i]
    if luka < 0:
        luka = -luka
    luki.append(luka)
print(luki)
print("najwieksza", max(luki), "najmniejsza", min(luki))
    