import os


def wejscie():
    action = input("'delete' to remove account, 'w' to write it, 'r' to read text: ")
    if action == 'r':
        plik = open("users/" + dane["login"] + ".txt", 'r')
        tekst = plik.readlines()
        print(tekst[3])
        plik.close()
    elif action == 'e':
        exit()
    elif action == "delete":
        print("account deleted! ")
        os.remove("users/" + dane["login"] + ".txt")
        exit()
    else:
        plik = open("users/" + dane["login"] + ".txt", 'a')
        plik.write(input("Możesz wpisać tekst: ") + " ")
        plik.close()


def logowanie():
    dane["login"] = input("Welcome to the text storage. Provide your login: ")
    plik = open("users/" + dane["login"] + ".txt", 'r')
    linie = plik.readlines()
    login = linie[0]
    haslo = linie[1]
    login = login[:len(login) - 1]
    haslo = haslo[:len(haslo) - 1]
    plik.close()
    if dane["login"] == login:
        dane["password"] = input("Provide password: ")
        if dane["password"] == haslo:
            print("Log0n sauccesful!")
            return True
        elif action == 'e':
            exit()
        else:
            print("Zle haslo! (", haslo, ")")
    else:
        print("zly login!")


def rejestracja():
    dane["login"] = input("Welcome to the text storage. Provide your login: ")
    dane["password"] = input("password: ")
    dane["email"] = input("Email: ")
    register = open("users/" + dane["login"] + ".txt", 'w')
    register.write(dane["login"] + "\n" + dane["password"] + "\n" + dane["email"] + "\n" + "Your text: ")
    register.close()
    return True


# petla ...
while 1 == 1:
    if 'loged' in vars():
        wejscie()
    else:
        dane = {}
        action = input("'R' to register, 'L' to login: ")
        if action == 'R':
            loged = rejestracja()
        elif action == 'e':
            exit()
        else:
            loged = logowanie()
