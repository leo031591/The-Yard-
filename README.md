# Restaurant Ordering System

A modern, minimalist restaurant ordering system built with React (frontend), PHP (backend), and MySQL (database).

## Features

- Browse menu items with categories
- Add items to cart
- View and manage cart
- Place orders
- View order history
- Responsive, minimalist modern design

## Project Structure

```
resto order system/
├── frontend/          # React application
├── backend/           # PHP API
├── database/          # MySQL schema and setup
└── README.md
```

## Setup Instructions

### Prerequisites

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Node.js 14 or higher
- npm or yarn

### Database Setup

1. Create a MySQL database:
```sql
CREATE DATABASE restaurant_order_system;
```

2. Import the schema:
```bash
mysql -u root -p restaurant_order_system < database/schema.sql
```

Or if you're using MySQL command line:
```bash
mysql -u root -p < database/schema.sql
```

3. Update database credentials in `backend/config.php`:
```php
define('DB_HOST', 'localhost');
define('DB_NAME', 'restaurant_order_system');
define('DB_USER', 'your_username');
define('DB_PASS', 'your_password');
```

### Backend Setup

1. Navigate to the backend directory:
```bash
cd backend
```

2. Start PHP development server:
```bash
php -S localhost:8000
```

The API will be available at `http://localhost:8000/api/`

**Note:** For production, use a proper web server like Apache or Nginx with proper configuration.

### Frontend Setup

1. Navigate to the frontend directory:
```bash
cd frontend
```

2. Install dependencies:
```bash
npm install
```

3. Start development server:
```bash
npm start
```

The application will automatically open at `http://localhost:3000`

### Running the Application

1. Make sure MySQL is running
2. Start the PHP backend server (in one terminal)
3. Start the React frontend (in another terminal)
4. Open `http://localhost:3000` in your browser

## API Endpoints

- `GET /api/categories.php` - Get all categories
- `GET /api/menu.php` - Get all menu items
- `GET /api/menu.php?category_id={id}` - Get menu items by category
- `GET /api/orders.php` - Get all orders
- `GET /api/orders.php/{id}` - Get single order
- `POST /api/orders.php` - Create new order
- `PUT /api/orders.php/{id}` - Update order status

## Features

- ✅ Browse menu by categories
- ✅ Add items to cart
- ✅ Update cart quantities
- ✅ Remove items from cart
- ✅ Checkout with customer information
- ✅ Order management
- ✅ Responsive design
- ✅ Minimalist modern UI

## Project Structure

```
resto order system/
├── frontend/              # React application
│   ├── public/           # Static files
│   ├── src/              # Source code
│   │   ├── components/   # React components
│   │   ├── services/     # API services
│   │   └── App.js        # Main app component
│   └── package.json
├── backend/              # PHP API
│   ├── api/             # API endpoints
│   ├── config.php       # Database configuration
│   └── router.php       # Simple router
├── database/            # Database files
│   └── schema.sql       # Database schema
└── README.md
```

