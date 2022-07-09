import sys
import sqlite3
import pandas as pd
try:
    sqliteConnection = sqlite3.connect('SQLite_Python.db')
    cursor = sqliteConnection.cursor()
except sqlite3.Error as error:
    print("Error while connecting to sqlite", error)
book = " ".join(sys.argv[1:])
query = "delete from books where Title=?"
rt = (book,)
cursor.execute(query,rt)
print("thank you")
sqliteConnection.commit()