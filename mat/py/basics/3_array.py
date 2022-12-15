lista = [1, 2]

lista += [2, 3]

print(len(lista))

print(lista)

lista2 = ["a1", "a2"]

lista.append(lista2)
lista[4][0] = ['b', 'c']
lista.insert(len(lista), 'ostatni')
print("lista z podlista", lista)

print("index z podlisty", lista[4][0][0])

liczby = [0]
liczby[0] = '1'
liczby.append('2')
liczby[0] = ['a', 'b']
liczby[1] = ['a', 'b']
print("liczby z podlist", liczby)

print("lista.count(3): ", lista.count(3))
print("index po wartosci: ", lista.index(1))