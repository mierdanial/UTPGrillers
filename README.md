UTPGrillers

UTPGrillers is a web-based restaurant ordering system built with HTML, CSS, and vanilla JavaScript on the front end, and PHP on the back end. Customers can browse the menu and place orders, while cashiers/admins can manage the menu, view orders, and generate receipts. All order and menu data is stored in a MySQL database via PHP.

Features


Customer ordering — browse the menu (burgers, sides, drinks, desserts) and submit an order
Menu management — add new menu items with images and prices (admin)
Order management — view, process, and delete orders (cashier/admin)
Live pricing — fetch the latest item price before checkout
Receipts — generate a printable receipt after an order is placed
User registration — register an account to place orders


Tech Stack

LayerTechnologyFront endHTML, CSS, JavaScriptBack endPHPDatabaseMySQL

Project Structure

Customer / Ordering


burgercust.html — Customer-facing ordering page
burgercust.js — Ordering page logic
order.js — Order handling / cart logic
process-order.php — Processes a submitted order
insert.php — Inserts order into the database
getlatestprice.php — Returns latest price for a menu item
receipt.php — Generates an order receipt


Cashier / Admin


admin.html — Admin dashboard
addmenu.html — Add new menu item (form)
addmenu.js — Add menu item logic
burgercashier.php — Cashier order view/queue
cashier1.js — Cashier page logic
vieworder.php — View all placed orders
delete_order.php — Delete an order


Registration


register.html — User registration page
register.css — Registration page styling


Additional Module (izzul)


izzul1.html
izzul2.php
izzul3.php


Styling


style1.css — Main stylesheet


Assets (menu item images / logo)


logo.png, bigmac.jpg, mcchicken.jpg, mcikan.jpg, lambburger.jpg, lemoncocola.jpg, banana.jpg, solero.jpg, air.jpg, back.jpg
