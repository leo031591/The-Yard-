<?php
// Test database connection script
// Run this with: php test-db-connection.php

require_once 'backend/config.php';

echo "Testing Database Connection...\n";
echo "==============================\n\n";

echo "Configuration:\n";
if (defined('DB_TYPE') && DB_TYPE === 'sqlite') {
    echo "  Type: SQLite\n";
    echo "  Database Path: " . DB_PATH . "\n\n";
} else {
    echo "  Type: MySQL\n";
    echo "  Host: " . (defined('DB_HOST') ? DB_HOST : 'N/A') . "\n";
    echo "  Database: " . (defined('DB_NAME') ? DB_NAME : 'N/A') . "\n";
    echo "  User: " . (defined('DB_USER') ? DB_USER : 'N/A') . "\n";
    echo "  Password: " . (defined('DB_PASS') && DB_PASS ? str_repeat('*', strlen(DB_PASS)) : '(empty)') . "\n\n";
}

try {
    $conn = getDBConnection();
    echo "✓ Database connection successful!\n\n";
    
    // Test query
    $stmt = $conn->query("SELECT COUNT(*) as count FROM categories");
    $result = $stmt->fetch();
    echo "✓ Found " . $result['count'] . " categories in database\n";
    
    $stmt = $conn->query("SELECT COUNT(*) as count FROM menu_items");
    $result = $stmt->fetch();
    echo "✓ Found " . $result['count'] . " menu items in database\n";
    
    echo "\n✓ Database is ready to use!\n";
    
} catch (Exception $e) {
    echo "✗ Connection failed: " . $e->getMessage() . "\n\n";
    echo "To fix this:\n";
    echo "1. Make sure MySQL is running\n";
    echo "2. Update backend/config.php with correct credentials:\n";
    echo "   - DB_USER: your MySQL username\n";
    echo "   - DB_PASS: your MySQL password\n";
    echo "3. Make sure the database 'restaurant_order_system' exists\n";
    echo "   If not, run: mysql -u root -p < database/schema.sql\n";
    exit(1);
}

