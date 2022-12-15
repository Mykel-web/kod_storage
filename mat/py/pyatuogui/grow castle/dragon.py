import pyautogui
import time

for i in range(1000):
    notused = 0
    while pyautogui.locateCenterOnScreen('battle.png', confidence=0.9) is None:
        if pyautogui.locateCenterOnScreen('get.png', confidence=0.8):
            pyautogui.click(1100, 691)
            pyautogui.moveTo(last.x, last.y)
            time.sleep(0.5)
            break
        if notused < 6:
            last = pyautogui.position()
            pyautogui.click(233, 743)
            pyautogui.click(239, 599)
            pyautogui.click(464, 544)
            pyautogui.click(461, 419)
            pyautogui.click(466, 297)
            pyautogui.click(477, 173)
            pyautogui.click(577, 168)
            pyautogui.click(587, 299)
            pyautogui.click(586, 421)
            pyautogui.click(577, 559)
            pyautogui.click(683, 558)
            pyautogui.click(677, 424)
            pyautogui.click(689, 305)
            pyautogui.click(701, 176)
            pyautogui.moveTo(last.x, last.y)
            time.sleep(1)

    last = pyautogui.position()
    pyautogui.click(1100, 691) # get item
    time.sleep(0.2)
    pyautogui.click(921, 347) # statua smoka
    time.sleep(0.2) 
    #który dragon
    #pyautogui.click(946, 227) # 2
    pyautogui.click(1434, 240) # 3
    #pyautogui.click(415, 409)   # 4
    time.sleep(0.2)
    pyautogui.click(1370, 897) # accept walki
    time.sleep(0.2)
    pyautogui.moveTo(last.x, last.y)
    print("atak: ", i)
    