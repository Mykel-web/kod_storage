file = open("dane/identyfikator.txt")
dane = file.read().splitlines()
print(dane)

def pal(wyraz):
    if wyraz == wyraz[::-1]:
        return True
    return False

for id in dane:
    if pal(id[3:]) or pal(id[:3]):
        print(id)
