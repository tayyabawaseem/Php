# PHP CRUD Application

This PHP-based CRUD (Create, Read, Update, Delete) application simplifies managing data in a database with a clean and customizable design.

## Features

- **Create:** Add new records.  
- **Read:** View and display records.  
- **Update:** Modify existing records.  
- **Delete:** Remove records.  
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
   cd php/CRUD_App
   ```

2. **Import the Database:**  
   Use `crud.sql` to set up the database.  
   ```sql
   CREATE DATABASE crud;
   USE crud;
   SOURCE crud.sql;
   ```

3. **Configure Database:**
   Update `config.php` with your database credentials.  

4. **Start the Server:**  
   Place the project in the `htdocs` folder and navigate to:  
   ```
   http://localhost/php/CRUD_App/index.php
   ```

## Usage

- **Create:** Add new data.  
- **Read:** View records.  
- **Update:** Edit records.  
- **Delete:** Remove data.  

## Folder Structure

```
php-crud-app/
├── index.php          # Homepage
├── create.php         # Add records
├── update.php         # Edit records
├── delete.php         # Delete records
├── config.php         # DB configuration
├── database/crud.sql           # Database setup
```

## Contribution

Fork, improve, and submit a pull request!
