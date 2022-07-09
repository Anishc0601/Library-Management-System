import sys
import datetime
import sqlite3
import pandas as pd
try:
    sqliteConnection = sqlite3.connect('SQLite_Python.db')
    cursor = sqliteConnection.cursor()
except sqlite3.Error as error:
    print("Error while connecting to sqlite", error)
url = "https://www.fast2sms.com/dev/bulk"
dt=datetime.date.today()
cursor.execute("select Mob from issue where Return_Date=?",(dt,))
rs=cursor.fetchall()
for num in rs:
    payload = "sender_id=FSTSMS&message=The book that you get issued from Library is getting due today.Kindly submit it today itself.&language=english&route=p&numbers={0}".format(*num)
    headers = {
        'authorization': "Lt8Mf45lvW36Gg9jmTw1URDZOSNzCQdkXbnExhBJoPy2qr0KFImd1TuFXjizPxgJvIVlQa6cNZWfRUYy",
        'Content-Type': "application/x-www-form-urlencoded",
        'Cache-Control': "no-cache",
        }
    response = requests.request("POST", url, data=payload, headers=headers)
    print(response.text)
print("Thank You")