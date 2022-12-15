import pyautogui
import time

for i in range(1):
    copy = pyautogui.locateCenterOnScreen('copy.png')
    pyautogui.click(copy.x, copy.y)
    time.sleep(1)
    pyautogui.click(351, 18)
    time.sleep(1)
    pyautogui.click(296, 81)
    time.sleep(1)
    pyautogui.click(1166, 310)
    time.sleep(1)
    pyautogui.click(1268, 303)
    time.sleep(4)
    down = pyautogui.locateCenterOnScreen('down.png')
    pyautogui.click(down.x, down.y)
    while pyautogui.locateCenterOnScreen('rdy.png') is None:
        time.sleep(1)
        print("download..")
    time.sleep(2)
    pyautogui.click(1900, 1008)
    time.sleep(1)
    pyautogui.click(584, 18)  # przejscie do karty yt
    time.sleep(1)
    pyautogui.click(328, 78) # reset yt
    time.sleep(4)
    pyautogui.click(1770, 135)
    time.sleep(1)
    pyautogui.click(1739, 175)
    time.sleep(1)
    pyautogui.click(986, 524)
    time.sleep(1)
    pyautogui.click(274, 173) # wybranie wideo
    time.sleep(1)
    pyautogui.click(768, 508)
    time.sleep(5)
    pyautogui.click(776, 391)
    nr = open("nr.txt", "r")
    numer = nr.read()
    numer = int(numer)
    numer += 1
    nr.close()
    nr = open("nr.txt", "w")
    nr.write(str(numer))
    nr.close()
    pyautogui.write(str(numer), interval=0.1)
    time.sleep(0.5)
    pyautogui.click(1281, 844) #zamkniecie tagow
    time.sleep(0.5)
    pyautogui.click(1393, 969)
    time.sleep(2)
    pyautogui.click(538, 749) #accept
    time.sleep(0.5)
    pyautogui.click(1393, 969, clicks=4, interval=1) #upload
    time.sleep(1)
    pyautogui.click(135, 18) #tik tok karta propably
    time.sleep(1)
    pyautogui.click(1337, 575) # next video
    time.sleep(1)
    pyautogui.click(822, 541)  # stop video
    time.sleep(1)