📦 Inventory Management System (IMS)

A full-featured Inventory Management System built with PHP, MySQL, and Vue.js, supporting role-based access for Admin and Sales users.
This project is designed to manage products, categories, warehouses, stock in/out, suppliers, and reporting with clean API architecture and a modern frontend.

🚀 Features
✅ User & Role Management

Admin & Warehouse, staff roles

Authentication (Login & Logout)

User CRUD

Role-based permissions

📦 Inventory Management

Product CRUD

Category management

Supplier management

Warehouse management

Stock In / Stock Out

Real-time stock updates

📊 Reports

Low-stock reports

Stock movement log

Product summary

Sales vs stock comparison

🛠 System Features

REST API (PHP + MySQL)

Frontend built with Vue.js

Modular folder structure

Secure form validation

Error handling & audit logs

Follows GitHub workflow and version control best practices

📂 Project Structure
inventory-management-system/
│
├── backend/                  # PHP backend (API)
│   ├── config/
│   ├── controllers/
│   ├── models/
│   ├── routes/
│   ├── helpers/
│   └── index.php
│
├── frontend/                 # Vue frontend
│   ├── src/
│   ├── public/
│   └── package.json
│
├── database/
│   ├── schema.sql            # Database structure
│   └── seed.sql              # Dummy data
│
├── docs/                     # Documentation (ERD, API docs)
│
├── .gitignore
├── README.md
└── LICENSE
