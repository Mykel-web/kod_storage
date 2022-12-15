import pyautogui
import time

for i in range(1000):
    can = True
    while pyautogui.locateCenterOnScreen('battle.png', confidence=0.9) is None:
        last = pyautogui.position()
        if pyautogui.locateCenterOnScreen('boss.png', confidence=0.9) and can:
            can = False
            pyautogui.click(464, 544) # skeletons
            pyautogui.click(461, 419) # skeletons
            pyautogui.click(466, 297) # skeletons
            pyautogui.click(477, 173)
            pyautogui.click(587, 299)
            pyautogui.click(586, 421)
            pyautogui.click(577, 559)
            pyautogui.click(683, 558)
            pyautogui.click(677, 424)
            pyautogui.click(689, 305)
            pyautogui.click(701, 176)
            pyautogui.click(233, 743) # archerzy
            pyautogui.click(239, 599) # archerzy
            pyautogui.click(577, 168) # necro
            pyautogui.moveTo(last.x, last.y)
        if can and (pyautogui.locateCenterOnScreen('archer.png', confidence=0.9) or pyautogui.locateCenterOnScreen('archer2.png', confidence=0.9)):
            pyautogui.click(233, 743) # archerzy
            pyautogui.click(239, 599) # archerzy
            pyautogui.click(464, 544) # skeletons
            pyautogui.click(461, 419) # skeletons
            pyautogui.click(466, 297) # skeletons
            pyautogui.click(577, 168) # necro
            pyautogui.moveTo(last.x, last.y)
    else:
        last = pyautogui.position()
        if pyautogui.locateCenterOnScreen("gem_max.PNG"):
            pyautogui.click(583, 672)
            time.sleep(2)
            pyautogui.click(591, 264)
            time.sleep(1)
            pyautogui.click(1324, 696, clicks=60, interval=0.1) # 60x upgrade balisty
            time.sleep(0.5)
            pyautogui.click(1437, 266)
            time.sleep(0.5)
            pyautogui.click(1758, 143)
            time.sleep(0.5)
        pyautogui.click(1699, 955) # next
        pyautogui.moveTo(last.x, last.y) 
        print("atak: ", i)
        time.sleep(3)
        #last = pyautogui.position()
        #pyautogui.click(223, 303) # SHRINE
        #pyautogui.moveTo(last.x, last.y)
        if pyautogui.locateCenterOnScreen("start.PNG"): # anti bot
            time.sleep(6)
