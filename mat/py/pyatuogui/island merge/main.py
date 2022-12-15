import pyautogui
import time

print("lokacja statkow:")
time.sleep(5)
wysyl = pyautogui.locateCenterOnScreen('wysyl.png', confidence=0.7)

lose = 0
win = 0

for i in range(1000):
    print("atak: ", i, " Wins : ", win, " loses: ", lose)
    while pyautogui.locateCenterOnScreen('battle.png', confidence=0.7) is None:
        time.sleep(0.1)
    else:
        battle = pyautogui.locateCenterOnScreen('battle.png', confidence=0.7)
        pyautogui.click(battle.x, battle.y)
    time.sleep(6)
    pyautogui.click(wysyl.x + 80, wysyl.y + 20)
    time.sleep(0.3)
    pyautogui.click(wysyl.x + 180, wysyl.y + 20)
    time.sleep(0.3)
    pyautogui.click(wysyl.x + 280, wysyl.y + 20)
    time.sleep(0.3)
    pyautogui.click(wysyl.x + 80, wysyl.y + 20)
    time.sleep(0.4)
    pyautogui.click(wysyl.x + 180, wysyl.y + 20)
    time.sleep(0.5)
    pyautogui.click(wysyl.x + 280, wysyl.y + 20)
    time.sleep(0.2)
    while pyautogui.locateCenterOnScreen('next.png', confidence=0.7) is None: #bitwa
        pyautogui.click(887, 254)
        pyautogui.click(clicks=3, interval=0.25)
        if pyautogui.locateCenterOnScreen('next2.png', confidence=0.7) is not None:
            print("jest: win + reklama")
            win += 1
            next = pyautogui.locateCenterOnScreen('next2.png', confidence=0.7)
            pyautogui.click(next.x, next.y)
            break
        if pyautogui.locateCenterOnScreen('next3.png', confidence=0.7) is not None:
            print("jest: lose")
            lose += 1
            next = pyautogui.locateCenterOnScreen('next3.png', confidence=0.7)
            pyautogui.click(next.x, next.y)
            break
    else:
        print("jest: win")
        win += 1
        next = pyautogui.locateCenterOnScreen('next.png', confidence=0.7)
        pyautogui.click(next.x, next.y)
