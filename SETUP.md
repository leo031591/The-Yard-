# Quick Setup Guide

## The menu is not displaying because the database needs to be set up.

### Step 1: Set up MySQL Database

You need to create the database and import the schema. Choose one of these methods:

#### Option A: Using the setup script (requires password)
```bash
./setup-database.sh
```
When prompted, enter your MySQL root password.

#### Option B: Manual setup
```bash
# If you have a MySQL password:
mysql -u root -p < database/schema.sql

# If you don't have a password (less common):
mysql -u root < database/schema.sql
```

### Step 2: Update Database Configuration

Edit `backend/config.php` and update these lines with your MySQL credentials:

```php
define('DB_HOST', 'localhost');
define('DB_NAME', 'restaurant_order_system');
define('DB_USER', 'root');           // Your MySQL username
define('DB_PASS', 'your_password');  // Your MySQL password (or '' if no password)
```

### Step 3: Test the Connection

Run the test script to verify everything works:
```bash
php test-db-connection.php
```

If you see "✓ Database is ready to use!", you're all set!

### Step 4: Restart the Backend Server

If the backend is running, restart it:
```bash
# Stop the current server (Ctrl+C) and restart:
cd backend
php -S localhost:8000
```

### Step 5: Refresh Your Browser

Refresh the page in Safari and the menu should now display!

---

## Troubleshooting

**"Access denied for user 'root'@'localhost'"**
- Your MySQL root user requires a password
- Update `DB_PASS` in `backend/config.php` with your MySQL password

**"Unknown database 'restaurant_order_system'"**
- The database hasn't been created yet
- Run the setup script or manually import the schema

**Still not working?**
- Check that MySQL is running: `mysql -u root -p -e "SELECT 1;"`
- Verify the backend is running: `curl http://localhost:8000/api/categories.php`
- Check browser console for errors (Cmd+Option+I in Safari)

