# Wardrobe Management System

![Screenshot from 2025-02-26 14-30-59](https://github.com/user-attachments/assets/c891533e-fa87-416a-8e61-ca2f029377ad)

# Overview

The Wardrobe Management System is a web-based application designed to help users efficiently organize their clothing items and plan outfits for each day of the week. It allows users to manage their wardrobe digitally, track their clothing history, and log interactions such as adding, updating, and wearing clothes.

![Screenshot from 2025-02-26 14-32-47](https://github.com/user-attachments/assets/2bd0826c-6fac-4b26-a10e-9ee16cc040e4)

# Features

User Authentication: Secure login and registration.

# Clothing Management:
![Screenshot from 2025-02-26 14-31-14](https://github.com/user-attachments/assets/4b4ae4aa-d958-4f3d-b0bb-0ae95a306fe0)

Add, edit, and delete clothing items.

Store details such as name, color, size, brand, material, and condition.

Upload and manage images for each clothing item.

Daily Outfit Planning:

Organize outfits by day (Monday - Sunday).

Display outfit recommendations dynamically on the homepage.

# Logging System:

Automatically logs actions like adding, updating, and deleting items.

Tracks user interactions with clothing items (e.g., wear, wash).

# Relationship Management:

Items belong to users and categories.

Tracks purchases, laundries, and usage history.

![Screenshot from 2025-02-26 14-31-28](https://github.com/user-attachments/assets/0306b85c-665b-4d02-981f-7fb51147e9c7)

# Other Features

users: Stores user information.

items: Stores clothing item details.

categories: Defines clothing categories.

brands, materials, conditions: Stores metadata related to clothing.

logs: Tracks user actions.

histories: Stores past clothing interactions.

favorites: Allows users to favorite items.

purchases: Tracks purchased clothing.

laundries: Logs washing details.

![Screenshot from 2025-02-26 14-32-23](https://github.com/user-attachments/assets/eb7a3002-7bae-4fbc-8292-f86909df675a)


# Technologies Used

Backend: Laravel (PHP Framework)

Frontend: Blade Templates, Bootstrap

Database: MySQL (InnoDB Engine)

![Screenshot from 2025-02-26 14-48-51](https://github.com/user-attachments/assets/47cf164a-3af1-4702-b14e-08715225e1a4)

Storage: Public Storage for Image Uploads

Database Schema: Tables & Relationships

# Installation Guide

Steps to Install

Clone the repository:

    git clone https://github.com/MuchiriKinyua/Wardrobe-Management-System

cd Wardrobe-Management-System

Use the sql db I have provided in the parent folder called Wardrobe-Management-System.sql

Install dependencies:

    composer install

Configure environment file:

    cp .env.example .env

Update database credentials in .env.

Generate application key:

    php artisan key:generate

Run migrations:

    php artisan migrate --seed

Link storage for images:

    php artisan storage:link

Start the development server:

    php artisan serve

Open the application in a browser:

http://127.0.0.1:8000

# Login Credentials:
email: admin@gmail.com
password: 12345678

# Usage

Adding Clothing Items:

Navigate to the "Add Item" page.

Fill in details and upload an image.

Viewing Weekly Outfits:

The homepage dynamically fetches and displays outfits for each day.

Managing Wardrobe:

Edit or delete items.

Log wear and wash actions.

![Screenshot from 2025-02-26 14-45-36](https://github.com/user-attachments/assets/3cb202a4-493b-4c4e-9cfe-fe9764c798e2)

# N/B: 
     email: admin@gmail.com
     password: 12345678

# Future Enhancements

AI-powered outfit recommendations.

Mobile app version.

Integration with smart wardrobe devices.

# Author

Made with ❤️ by Muchiri Kinyua
