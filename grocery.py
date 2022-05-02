# Alex Buchanan

from asyncio.windows_events import NULL
from flask import Flask, redirect, render_template, request
import psycopg

app = Flask(__name__)

sql = """
SELECT item, amount,price
FROM grocery;
"""


@app.route('/')
def select():
    con = psycopg.connect("host=localhost dbname=project3 user=root password=root")
    cur = con.cursor()
    cur.execute(sql)
    data = cur.fetchall()

    return render_template("grocery.html", data=data)

newCar = """
INSERT INTO grocery
VALUES (%s, %s,%s);
"""

@app.route('/ins', methods=['POST'])
def insert():
    vin = request.form.get('item','')
    make = request.form.get('amount','')
    price = request.form.get('price','')
    con = psycopg.connect("host=localhost dbname=project3 user=root password=root")
    cur = con.cursor()
    cur.execute(newCar, (vin,make,price))
    con.commit()
    return redirect('/')

removeItem = """
DELETE FROM grocery
where vin = %s;
"""

@app.route('/del/<item>')
def delete(item):
    con = psycopg.connect("host=localhost dbname=project3 user=root password=root")
    cur = con.cursor()
    cur.execute(removeItem, (item,))
    con.commit()
    return redirect('/')
    