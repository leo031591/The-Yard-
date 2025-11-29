#!/bin/bash

echo "Restaurant Order System - Database Setup"
echo "=========================================="
echo ""

# Prompt for MySQL root password
read -sp "Enter MySQL root password (press Enter if no password): " MYSQL_PASS
echo ""

if [ -z "$MYSQL_PASS" ]; then
    MYSQL_CMD="mysql -u root"
else
    MYSQL_CMD="mysql -u root -p$MYSQL_PASS"
fi

echo "Creating database and importing schema..."
$MYSQL_CMD < database/schema.sql 2>&1

if [ $? -eq 0 ]; then
    echo "✓ Database setup completed successfully!"
    echo ""
    echo "Please update backend/config.php with your MySQL credentials:"
    echo "  - DB_USER: root"
    echo "  - DB_PASS: (your password or leave empty if no password)"
else
    echo "✗ Database setup failed. Please check your MySQL credentials."
    exit 1
fi

