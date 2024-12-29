# PHP CRUD Application

This PHP-based CRUD (Create, Read, Update, Delete) application demonstrates the fundamental operations for managing data in a database.
It is designed to be simple, efficient, and easy to customize for various use cases.

## Features

- **Create:** Add new records to the database.
- **Read:** Retrieve and display records from the database.
- **Update:** Modify existing records in the database.
- **Delete:** Remove records from the database.
- User-friendly interface with Bootstrap for styling.
- Secure and clean code structure.

## Technologies Used

- **Frontend:** HTML, CSS, Bootstrap
- **Backend:** PHP
- **Database:** MySQL
- **Server Environment:** Apache (XAMPP, WAMP, or any LAMP stack)

## Prerequisites

Before running this application, ensure you have the following installed:

- PHP (version 7.4 or later)
- MySQL database
- A local server like XAMPP, WAMP, or LAMP

## Installation

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/tayyabawaseem/Php.git
   cd php/CRUD_App
   ```

2. **Import the Database:**
   - Locate the `database.sql` file in the project directory.
   - Import the file into your MySQL server using phpMyAdmin or any MySQL client.
   ```sql
   CREATE DATABASE crud;
   USE crud;
   SOURCE crud.sql;
   ```

3. **Configure Database Connection:**
   - Open the `config.php` file and update the database credentials.
   ```php
   define('DB_HOST', 'localhost');
   define('DB_USER', 'root');
   define('DB_PASS', '');
   define('DB_NAME', 'crud');
   ```

4. **Start the Server:**
   - Run the application on a local server (e.g., XAMPP, WAMP).
   - Place the project folder in the `htdocs` directory (for XAMPP) or the equivalent for your server.

5. **Access the Application:**
   Open your browser and navigate to:
   ```
   http://localhost/php/CRUD_App/index.php
   ```

## Usage

1. **Create Record:** Fill out the form to add a new record.
2. **Read Records:** View all existing records in a tabular format.
3. **Update Record:** Click the "Edit" button next to a record, update its details, and save.
4. **Delete Record:** Click the "Delete" button next to a record to remove it.

## Folder Structure

```
php-crud-app/
│
├── index.php          # Homepage displaying all records
├── create.php         # Form to add new records
├── update.php         # Form to edit existing records
├── delete.php         # Handles record deletion
├── config.php         # Database configuration
├── database.sql       # SQL file to set up the database
├── assets/            # Contains CSS, JS, and image files
└── README.md          # Documentation
```

## Screenshots

1. **Homepage (Read Records):**
   Displays all records in a table with options to edit or delete.

2. **Create Record:**
   Simple form to add a new record to the database.

3. **Update Record:**
   Edit details of an existing record.

4. **Delete Confirmation:**
   A confirmation prompt before deleting a record.

## Contributing

Feel free to fork this repository and make improvements. Pull requests are welcome!

 
 
