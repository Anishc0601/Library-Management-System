import sys
import datetime
import sqlite3
import pandas as pd
try:
    sqliteConnection = sqlite3.connect('SQLite_Python.db')
    cursor = sqliteConnection.cursor()
except sqlite3.Error as error:
    print("Error while connecting to sqlite", error)
book = " ".join(sys.argv[1:-1])
id=int(sys.argv[-1])
cursor.execute("select Return_Date from issue where Book=? AND StId=?",(book,id))
rs=cursor.fetchone()
rtdate=rs[0]
cursor.execute("delete from issue where Book=? AND StId=?",(book,id))
sqliteConnection.commit()
cursor.execute("select * from books where Title=?", (book,))
rs = cursor.fetchone()
nc = rs[6]
cursor.execute("update books set Count_books=? where Title=?", (nc+1, book))
sqliteConnection.commit()