# 🩺 Jastip Vitamin

Modern Ecommerce Vitamin Website built with Laravel.

![Laravel](https://img.shields.io/badge/Laravel-12-red?style=for-the-badge\&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.3-blue?style=for-the-badge\&logo=php)
![MySQL](https://img.shields.io/badge/MySQL-Database-orange?style=for-the-badge\&logo=mysql)
![Status](https://img.shields.io/badge/Status-Development-success?style=for-the-badge)

---

# Overview

Jastip Vitamin is a modern ecommerce website focused on selling premium vitamins and supplements with a clean UI, responsive mobile experience, and real-time dynamic features.

This project was built using Laravel with authentication, admin dashboard, cart system, Google login integration, and responsive ecommerce design.

---

# Features

## User Features

* Login & Register Authentication
* Google Login Authentication
* Responsive Mobile UI
* Product Catalog
* Search Products
* Cart System
* Checkout System
* Profile Settings
* Upload Avatar
* Dynamic Stock Status
* Modern Ecommerce Navigation

---

## Admin Features

* Admin Dashboard
* Product Management (CRUD)
* Dynamic Product Data
* Real-time Statistics
* Order Monitoring
* Revenue Display

---

# Responsive Design

Optimized for:

* Desktop
* Tablet
* Mobile Devices

Inspired by modern ecommerce UI like Tokopedia, Shopee, and modern startup websites.

---

# 🧰 Tech Stack

| Technology   | Usage               |
| ------------ | ------------------- |
| Laravel 12   | Backend Framework   |
| PHP 8.3      | Server Language     |
| MySQL        | Database            |
| Blade        | Frontend Template   |
| CSS3         | Styling             |
| JavaScript   | Dynamic Interaction |
| Google OAuth | Social Login        |
| Font Awesome | Icons               |

---

## Homepage

<img width="100%" alt="Homepage Preview" src="https://via.placeholder.com/1200x700.png?text=Homepage+Preview">

---

## Product Catalog

<img width="100%" alt="Catalog Preview" src="https://via.placeholder.com/1200x700.png?text=Catalog+Preview">

---

## Profile Settings

<img width="100%" alt="Profile Preview" src="https://via.placeholder.com/1200x700.png?text=Profile+Settings">

---

## Admin Dashboard

<img width="100%" alt="Admin Dashboard" src="https://via.placeholder.com/1200x700.png?text=Admin+Dashboard">

---

# ⚙️ Installation

## 1. Clone Repository

```bash
git clone https://github.com/your-username/jastip-vitamin.git
```

---

## 2. Open Project

```bash
cd jastip-vitamin
```

---

## 3. Install Dependencies

```bash
composer install
```

---

## 4. Copy Environment File

```bash
cp .env.example .env
```

---

## 5. Generate App Key

```bash
php artisan key:generate
```

---

## 6. Configure Database

Edit your `.env` file:

```env
DB_DATABASE=jastipvitamin
DB_USERNAME=root
DB_PASSWORD=
```

---

## 7. Run Migration

```bash
php artisan migrate
```

---

## 8. Start Development Server

```bash
php artisan serve
```

---

# Google Login Setup

Add Google OAuth credentials inside `.env`

```env
GOOGLE_CLIENT_ID=
GOOGLE_CLIENT_SECRET=
GOOGLE_REDIRECT_URI=http://127.0.0.1:8000/auth/google/callback
```

---

# Project Structure

```bash
app/
├── Http/
│   ├── Controllers/
│   ├── Middleware/
├── Models/
resources/
├── views/
public/
├── css/
├── products/
├── avatars/
routes/
```

---

# Future Improvements

* Midtrans Payment Gateway
* Wishlist System
* Product Reviews & Ratings
* Order History
* Admin Order Management
* Real-time Analytics
* Email Notifications
* Product Detail Page

---

# Developer

1. Al Yasmin Assa'diyah
2. Affifah Putri Deza

---

# Support

If you like this project:

* Give this repository a star 
* Fork the project 
* Share with your friends 

---

# License

This project is open-source and available under the MIT License.
