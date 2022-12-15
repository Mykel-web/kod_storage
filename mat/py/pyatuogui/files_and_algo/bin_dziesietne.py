tab  = [5,4,7,9,2,4,7,11,55,77,1,2,6,5,3,2,0]
n = 0
while n <= len(tab):
    k = 0
    for i in range(len(tab) - 1):
        if tab[i + 1] < tab[i]:
            temp = tab[i + 1]
            for j in range(i, k-1, -1):
                tab[j + 1]  = tab[j]
            tab[k] = temp
            k += 1
    n += 1
print(tab)