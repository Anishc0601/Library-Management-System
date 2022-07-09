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
df=pd.read_csv("book_sql.csv")
bk=df[df["Title"]==book]
d=bk.index
i=d[0]
name=book
aut=bk["Author"]
gen=bk["Genre"]
sg=bk["SubGenre"]
ht=bk["Height"]
pls=bk["Publisher"]

query="insert into books(Title,Author,Genre,SubGenre,Height,Publisher,Count_books) values(?,?,?,?,?,?,?)"
h=str(ht[i])
rt=(name,aut[i],gen[i],sg[i],h,pls[i],cnt)
cursor.execute(query,rt)
print("Thank you")
sqliteConnection.commit()