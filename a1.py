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
cursor.execute("select * from books where Title=?", (book,))
rs = cursor.fetchone()
nc = rs[6]
if rs[6] == 0:
    print("Book not available now.")
else:
    cursor.execute("select * from student where StId=?", (id,))
    rs = cursor.fetchone()
    nm = rs[1]
    mb = rs[3]
    idate = datetime.date.today()
    rdate = datetime.date.today() + datetime.timedelta(days=7)
    cursor.execute("insert into issue values(?,?,?,?,?,?)", (book, nm, id, mb, idate, rdate))
    sqliteConnection.commit()
    cursor.execute("update books set Count_books = ? where Title=?", (nc - 1, book))
    sqliteConnection.commit()