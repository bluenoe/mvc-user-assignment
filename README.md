<img width="1311" height="456" alt="image" src="https://github.com/user-attachments/assets/8ece6f53-bb68-40d5-88be-c20a8626bbd3" /># MVC User Management Assignment

Assignment PHP MVC at school.  
This is a small PHP project that demonstrates the **MVC pattern** (Model–View–Controller).

The application allows you to:
- List all users
- Search by email, first name, or last name
- Edit user information (first name, last name)
- Delete user
- Handle database connection errors

---

## 🗂 Project Structure
```
mvc_user/
├── controller/
│ └── user_controller.php
├── model/
│ ├── database.php
│ └── user_db.php
├── view/
│ ├── database_error.php
│ ├── edit_user.php
│ └── list_user.php
└── index.php
```
---

## ⚙️ Installation & Run

1) Clone the repository
```bash
git clone https://github.com/<bluenoe>/mvc-user-management.git
cd mvc-user-management
```
2) Move the folder into your web server root (or clone there directly) 

XAMPP → htdocs/mvc_user

Laragon → www/mvc_user

3) Create database and seed data

```sql
CREATE DATABASE mvc_userdb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE users (
  email VARCHAR(100) PRIMARY KEY,
  firstName VARCHAR(50) NOT NULL,
  lastName  VARCHAR(50) NOT NULL
);

INSERT INTO users (email, firstName, lastName) VALUES
('annguyen@gmail.com', 'An', 'Nguyen'),
('binhle@gmail.com',   'Binh', 'Le'),
('trangtran@gmail.com','Trang', 'Tran');
```

4) Configure DB connection
Open model/database.php and set your credentials (XAMPP / Laragon default is root with empty password, the password here is ' sesame '.).

5) Run the app
```
   http://localhost/mvc_user/controller/user_controller.php?action=list_users
```
📸 Screenshots

<img width="1919" height="554" alt="image" src="https://github.com/user-attachments/assets/422f6924-503c-4671-90e1-56ada637b5c6" />

📖 Notes

- Email is the primary key and cannot be edited.

- Uses PHP PDO with prepared statements.

- DB errors are shown via view/database_error.php.

