import pyautogui
import time

time.sleep(3)

x = 1546
y = 303

#sekunda to 20 clickow przy interval 0.05
#realnie wychodzi 16
ilosc = 800
czas = 0.05
print(ilosc, " klikow, co", czas, "s zajmie", ilosc*czas, " s")
pyautogui.click(x, y, clicks=ilosc, interval=czas)
print("kliknieto")

