import pyautogui
import time

for i in range(100):
    if pyautogui.locateCenterOnScreen('next3.png') is not None:
            print("jest: next + przegrana")
            next = pyautogui.locateCenterOnScreen('next3.png')
            pyautogui.click(next.x, next.y)

    else:
        print("niema")