"""
Test #1

Depuis la page d'accueil:

- Verifier la visualisation d'un backlog
"""

from selenium import webdriver
from selenium.webdriver.support.ui import WebDriverWait

driver = webdriver.Firefox()

driver.get("http://localhost:8080/backlog.php")

try:
    WebDriverWait(driver, timeout=10)
    assert "Backlog" in driver.title
finally:
    driver.quit()
