file = open("dane/punkty.txt", "r")
dane = file.read().splitlines()
ile = 0
def prime(l):
    if l<=2:
        return False
    else:
        for i in range(2,l//2+1):
            if l%i==0:
                return False
        return True
for pkt in dane:
    punkt = pkt.split(" ")
    if prime(int(punkt[0])) and prime(int(punkt[1])):
        ile += 1
print(ile)