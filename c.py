import sys
import sqlite3
import pandas as pd
try:
    sqliteConnection = sqlite3.connect('SQLite_Python.db')
    cursor = sqliteConnection.cursor()
except sqlite3.Error as error:
    print("Error while connecting to sqlite", error)
book = " ".join(sys.argv[1:-1])
cnt=int(sys.argv[-1])
cursor.execute("select Count_books from books where Title=?", (book,))
rs = cursor.fetchone()
if cnt>rs[0]:
    print("your count is wrong.")
nc = rs[0] - cnt
cursor.execute("update books set Count_books = ? where Title=?", (nc,book))
sqliteConnection.commit()