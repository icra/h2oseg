#!/usr/bin/python3
import sys
import psycopg

# connect to the PostgreSQL database
conn = psycopg.connect(
  host="217.61.208.188",
  dbname="traca_1",
  user="traca_user",
  password="EdificiH2O!",
);

# mostra noms de les columnes
with conn.cursor() as cur:
  cur.execute("SELECT column_name FROM information_schema.columns WHERE table_schema = 'public' AND table_name = 'cens_v4_1_prova'");
  columns = cur.fetchall();
  for col in columns:
      print(col[0]);

# open a cursor to perform database operations
cur = conn.cursor();

# execute a query
cur.execute("SELECT * FROM cens_v4_1_prova");

# fetch all the rows in the result set
rows = cur.fetchall();

# print the rows
for row in rows:
    print(row);

# close the cursor and the connection
cur.close();
conn.close();
