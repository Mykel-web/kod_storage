a = 1
b = 0
try:
    print(2 / 0)
    print(" po a / 0")
except (TypeError, ZeroDivisionError):
    print("nie mozna dzielic 0 / type eror/ index eror")
except:
    print("inny blad")
finally:
    print("koniec")
