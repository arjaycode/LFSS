### 🎒 Lost and Found School System

A digital platform designed for schools to help students and staff report, track, and claim lost or found items efficiently. With role-based access and an admin dashboard, the system ensures transparency, accountability, and improved return rates for lost belongings.

# ✨ Features:

### 👥 User Roles

Students & Staff: Report lost/found items.  
Admin (School Authority): Verify reports, manage claims, and monitor system usage.

### 📝 Lost Item Reporting

Submit item details (name, description, color, brand, photo, date lost, location last seen).  
Mark items as urgent or valuable.

### 📸 Found Item Reporting

Submit found item details (photo, description, location, and time found).  
Items are automatically tagged as Unclaimed.

### 🔍 Search & Filter

Search lost/found items by category (phone, bag, ID, books, uniform, etc.), date, or location.  
Filter to quickly match lost items with reported found items.

### 📊 History & Records

Track all past lost/found items.  
Generate reports (e.g., most common lost items, return success rate).

### 📌 Admin Dashboard

Manage users and monitor reports.  
Approve claims to ensure rightful ownership.  
View analytics: number of lost, found, and returned items per month.

### Tech Stack

Backend: Laravel  
Frontend (Web): Laravel Blade  
Frontend (Mobile): NativeScript + Vue.js

# Installation & Setup Prerequisites

PHP 8+  
Composer  
Node.js & npm  
NativeScript CLI  
MySQL

# Backend (Laravel) Setup:

### Clone the repository

git clone https://github.com/arjaycode/LFSS.git

### Navigate into the backend folder

cd backend

### Install dependencies

composer install

### Copy environment file and configure database

cp .env.example .env
php artisan key:generate

### Run migrations

php artisan migrate

### Serve the app

php artisan serve

# Frontend (Web - Laravel Blade)

No separate setup required, Laravel Blade runs within the backend.

# Frontend (Mobile - React Native Expo)

cd frontend  
npm install  
npx expo start
