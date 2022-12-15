import pyautogui
import time

for i in range(100):
    time.sleep(3)
    kord = pyautogui.position()
    print(kord)
