"""
Test #1

Depuis la page d'accueil:

- Verifier la visualisation d'un backlog
"""

# from pyvirtualdisplay import Display
from selenium import webdriver
from selenium.webdriver.support.ui import WebDriverWait

# display = Display(visible=0, size=(800, 600))
# display.start()

driver = webdriver.Firefox()

driver.get("http://localhost:8080/backlog.php")

try:
    WebDriverWait(driver, timeout=10)
    assert "Backlog" in driver.title
finally:
    driver.quit()
