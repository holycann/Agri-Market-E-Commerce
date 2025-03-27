# AgriMarket - Agricultural E-Commerce Platform

## Overview
AgriMarket is a comprehensive e-commerce platform designed specifically for farmers and agricultural vendors. The platform facilitates direct connections between farmers and customers, enabling the sale of agricultural products while providing valuable market insights and farming information.

## Features

### Customer Features
- User authentication and profile management
- Browse and search agricultural products
- Category-based product filtering
- Shopping cart and wishlist functionality
- Secure checkout process
- Order tracking
- Product reviews and ratings
- Market price insights

### Vendor Features
- Vendor dashboard with sales analytics
- Product management system
- Inventory tracking
- Order management
- Customer review management
- Real-time sales statistics
- Bulk product upload/update

### Technical Stack
- **Backend**: PHP (OOP)
- **Frontend**: HTML5, Tailwind CSS, JavaScript
- **Database**: MySQL
- **Libraries**:
  - jQuery for AJAX operations
  - Chart.js for analytics visualization
  - SweetAlert2 for notifications

## Project Structure
```
AgriMarket/
├── config/                 # Configuration files
├── core/                  # Core framework files
├── database/             # Database migrations
├── src/
│   ├── controllers/     # Application controllers
│   ├── middleware/      # Request middleware
│   ├── models/         # Database models
│   ├── repositories/   # Data access layer
│   ├── routes/        # Route definitions
│   ├── services/      # Business logic
│   └── views/         # Frontend templates
├── utils/             # Utility scripts
└── public/           # Public assets
```

## Setup Instructions

### Prerequisites
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Xampp

### Installation Steps
1. Clone the repository:
   ```bash
   git clone https://github.com/holycann/Agri-Market-E-Commerce.git
   ```

2. Configure environment variables:
   <!-- - Copy `config/env.example.php` to `config/env.php` -->
   - Update database credentials and other settings on `config/env.php`

3. Run database migrations:
   ```bash
   php utils/migrate.php up
   ```

4. Access the application:
   - Open your browser and navigate to the configured domain
   <!-- - Default admin credentials: admin@agrimarket.com / admin123 -->

## Development

### Creating New Components
Use the provided utility scripts to generate boilerplate code:
```bash
php utils/create.php controller directory ControllerName
php utils/create.php model directory ModelName
php utils/create.php repository directory RepositoryName
php utils/create.php service directory ServiceName
php utils/create.php view directory ViewName
```

### Database Migrations
Create new migrations:
```bash
php utils/create.php migration directory MigrationName
```

Run migrations:
Make Table Base Ur Migration
```bash
php utils/migrate.php up
```

Drop Table Base Ur Migration
```bash
php utils/migrate.php down
```