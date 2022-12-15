def decorator(funkcja):
    def wrapper():
        file = open("kokos.txt", "w")
        funkcja()
        file.close()
        print("plik done")

    return wrapper


def hello():
    print("siema")


hello = decorator(hello)
print(hello())


@decorator
def helo():
    print(" ok ")


helo()
