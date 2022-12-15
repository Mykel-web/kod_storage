import pyautogui
import time

for i in range(1000):
    notused = True
    while pyautogui.locateCenterOnScreen('battle.png', confidence=0.9) is None:
        if pyautogui.locateCenterOnScreen('boss.png', confidence=0.9) and notused:
            notused = False
            last = pyautogui.position()
            pyautogui.click(233, 743)
            time.sleep(0.01)
            pyautogui.click(239, 599)
            time.sleep(0.01)
            pyautogui.click(464, 544)
            time.sleep(0.01)
            pyautogui.click(461, 419)
            time.sleep(0.01)
            pyautogui.click(466, 297)
            time.sleep(0.01)
            pyautogui.click(477, 173)
            time.sleep(0.01)
            pyautogui.click(577, 168)
            time.sleep(0.01)
            pyautogui.click(587, 299)
            time.sleep(0.01)
            pyautogui.click(586, 421)
            time.sleep(0.01)
            pyautogui.click(577, 559)
            time.sleep(0.01)
            pyautogui.click(683, 558)
            time.sleep(0.01)
            pyautogui.click(677, 424)
            time.sleep(0.01)
            pyautogui.click(689, 305)
            time.sleep(0.01)
            pyautogui.click(701, 176)
            time.sleep(0.01)

            pyautogui.moveTo(last.x, last.y)
    else:
        last = pyautogui.position()
        pyautogui.click(1454, 880)
        time.sleep(0.1)
        pyautogui.click(1283, 858)

        # Statuetka
        #pyautogui.moveTo(last.x, last.y)
        # time.sleep(3)
        #pyautogui.click(354, 322)

        pyautogui.moveTo(last.x, last.y)
        print("atak: ", i)
        time.sleep(20)
