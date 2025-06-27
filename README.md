# RE-DREAM 🏠

<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="200" alt="Laravel Logo">
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

**RE-DREAM** is a modern Laravel-based Real Estate Management Application designed to streamline property listings, CRUD operations, and data presentation for real estate platforms.

## ✨ Features

- 🏢 **Property Management**: Complete CRUD operations for property listings
- 🔐 **Authentication System**: Secure user authentication and authorization
- 🎨 **Modern UI**: Responsive frontend built with Bootstrap 5
- 🔍 **Search & Filter**: Advanced property browsing and filtering capabilities
- 🗂 **MVC Architecture**: Clean, organized Laravel structure
- 🛠 **Extensible**: Easy to extend with Laravel ecosystem packages

## 🧰 Tech Stack

| Layer         | Technology           |
|---------------|---------------------|
| **Backend**   | Laravel 10.x        |
| **Frontend**  | Blade Templates     |
| **Styling**   | Bootstrap 5, CSS    |
| **Build Tool**| Vite                |
| **Database**  | MySQL / MariaDB     |
| **Tools**     | Composer, NPM       |

## 🚀 Installation

### Prerequisites
- PHP 8.1+
- Composer
- Node.js & NPM
- MySQL/MariaDB

### Setup Steps

```bash
# 1. Clone the repository
git clone https://github.com/KEI404-A/RE-DREAM.git
cd RE-DREAM

# 2. Install PHP dependencies
composer install

# 3. Install Node.js dependencies
npm install

# 4. Setup environment file
cp .env.example .env

# 5. Generate application key
php artisan key:generate

# 6. Configure your database in .env file
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=redream
# DB_USERNAME=your_username
# DB_PASSWORD=your_password

# 7. Run database migrations
php artisan migrate

# 8. Build frontend assets
npm run dev

# 9. Start the development server
php artisan serve
```

⚠️ **Important**: Make sure to configure your `.env` file with the correct database credentials before running migrations.

## 📁 Project Structure

```
RE-DREAM/
├── app/
│   ├── Http/Controllers/
│   ├── Models/
│   └── ...
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
│   └── images/
├── resources/
│   ├── views/
│   ├── css/
│   └── js/
├── routes/
│   └── web.php
├── .env.example
└── README.md
```

## 🎯 Usage

After installation, you can:

1. Access the application at `http://localhost:8000`
2. Create, read, update, and delete property listings
3. Browse and filter properties
4. Manage real estate data efficiently

## 🔧 Development

```bash
# Run in development mode
npm run dev

# Build for production
npm run build

# Run tests
php artisan test
```

## 🤝 Contributing

We welcome contributions! Please follow these steps:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

For major changes, please open an issue first to discuss what you would like to change.

## 📝 License

This project is open-source software licensed under the [MIT License](https://opensource.org/licenses/MIT).

## 🙋‍♂️ Contact & Support

- **Developer**: KEI404-A
- **GitHub**: [@KEI404-A](https://github.com/KEI404-A)
- **Project Link**: [https://github.com/KEI404-A/RE-DREAM](https://github.com/KEI404-A/RE-DREAM)

---

<p align="center">
  <strong>RE-DREAM</strong> – Build your next real estate platform the Laravel way! 🚀
</p>
