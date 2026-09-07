# User Authentication System

A simple PHP & MySQL user authentication system with registration, login, role-based access, and logout functionality. Built as a portfolio project to demonstrate secure user management and session handling.

---

##  Features
- User registration with input validation
- Secure password hashing (`password_hash`)
- User login with session management
- Role-based access control (Admin vs User)
- Protected dashboard page
- Secure logout functionality

---

##  Technologies Used
- PHP (Core logic)
- MySQL (Database)
- HTML & CSS (Frontend)
- XAMPP/WAMP/AMPPS (Local server environment)

---
##  Project Structure
auth_system/
│── index.php          # Redirects to login
│── db_connect.php     # Database connection
│── register.php       # User registration
│── login.php          # User login
│── dashboard.php      # Protected dashboard
│── logout.php         # End session


---

##  Database Setup
Run the following SQL script in phpMyAdmin or MySQL CLI:

```sql
CREATE DATABASE auth_system;

USE auth_system;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    role ENUM('admin','user') DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

How to Run
Install XAMPP or WAMP/AMPPS.

Start Apache and MySQL from the control panel.

Place the project folder (auth_system) inside the htdocs (XAMPP) or www (WAMP/AMPPS) directory.

Open http://localhost/auth_system/ in your browser.

Register a new user → Login → Access the dashboard → Logout.

Future Improvements
Password reset functionality

Email verification

Session timeout for added security

Bootstrap styling for a modern UI

Author
Creighton Snyders  

## 📂 Project Structure
