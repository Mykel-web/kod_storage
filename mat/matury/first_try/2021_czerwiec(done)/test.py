test = "66665"

if len(test) % 2 == 0 :
    for i in range(len(test)):
            if i % 2 == 0:
                kod = test[i] + test[i+1]
                print(kod)
else:
    for i in range(len(test) - 1):
            if i % 2 == 0:
                kod = test[i] + test[i+1]
                print(kod)