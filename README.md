# Employee Management System (EMS)

This is a simple Employee Management System (EMS) developed using PHP and MySQL. It enables managing employee details efficiently with basic CRUD operations.

## Features

- **Create:** Add new employees.  
- **Read:** View employee details.  
- **Update:** Edit employee information.  
- **Delete:** Remove employee records.
-  **Search:** Search employees.   
- User-friendly interface with Bootstrap.

## Technologies Used

- **Frontend:** HTML, CSS, Bootstrap  
- **Backend:** PHP  
- **Database:** MySQL  

## Prerequisites

- PHP (7.4 or later)  
- MySQL database  
- Local server (XAMPP, WAMP, etc.)

## Installation

1. **Clone the Repository:**  
   ```bash
   git clone https://github.com/tayyabawaseem/Php.git
   cd EMS
   ```

2. **Set Up the Database:**  
   - Locate the `ems.sql` file in the project directory.  
   - Import it into your MySQL server.  
   ```sql
   CREATE DATABASE ems;
   USE ems;
   SOURCE ems.sql;
   ```

3. **Configure the Database Connection:**  
   Update `config.php` with your database credentials:  
   ```php
   define('DB_HOST', 'localhost');
   define('DB_USER', 'root');
   define('DB_PASS', '');
   define('DB_NAME', 'ems');
   ```

4. **Start the Server:**  
   Place the project folder in the `htdocs` directory (for XAMPP) or equivalent.  
   Open your browser and navigate to:  
   ```
   http://localhost/EMS/index.php
   ```

## Usage

1. **Dashboard:** View all employee records.  
2. **Add Employee:** Fill out the form to add a new employee.  
3. **Edit Employee:** Click "Edit" to update an employee's information.  
4. **Delete Employee:** Click "Delete" to remove an employee from the system.

## Folder Structure

```
EMS/
├── index.php          # Homepage listing all employees
├── add_employee.php   # Form to add employees
├── edit_employee.php  # Form to edit employee details
├── delete_employee.php# Handles record deletion
├── config.php         # Database configuration
├── ems.sql            # SQL file to set up the database

```

## Screenshots

1. **Dashboard:** Displays all employee records in a table.  
2. **Add Employee:** User-friendly form to add new employee data.  
3. **Edit Employee:** Simple form to update employee details.  
4. **Delete Employee:** Confirmation prompt before deleting records.  

## Contribution

Contributions are welcome! Fork the repository, make improvements, and submit a pull request.  

## License

This project is open-source and available under the MIT License.
