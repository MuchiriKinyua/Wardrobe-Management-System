# Wardrobe Management System

# Overview

The Wardrobe Management System is a web-based application designed to help users efficiently organize their clothing items and plan outfits for each day of the week. It allows users to manage their wardrobe digitally, track their clothing history, and log interactions such as adding, updating, and wearing clothes.

# Features

User Authentication: Secure login and registration.

# Clothing Management:

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

# Technologies Used

Backend: Laravel (PHP Framework)

Frontend: Blade Templates, Bootstrap

Database: MySQL (InnoDB Engine)

Storage: Public Storage for Image Uploads

Database Schema

Tables & Relationships

users: Stores user information.

items: Stores clothing item details.

categories: Defines clothing categories.

brands, materials, conditions: Stores metadata related to clothing.

logs: Tracks user actions.

histories: Stores past clothing interactions.

laundries: Logs washing details.

favorites: Allows users to favorite items.

purchases: Tracks purchased clothing.

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

# Usage

Adding Clothing Items:

Navigate to the "Add Item" page.

Fill in details and upload an image.

Viewing Weekly Outfits:

The homepage dynamically fetches and displays outfits for each day.

Managing Wardrobe:

Edit or delete items.

Log wear and wash actions.

# API Endpoints (If Applicable)

Method

Endpoint

Description

GET

/api/items

Fetch all wardrobe items

POST

/api/items

Add a new clothing item

PUT

/api/items/{id}

Update an item

DELETE

/api/items/{id}

Delete an item

# Future Enhancements

AI-powered outfit recommendations.

Mobile app version.

Integration with smart wardrobe devices.

# Author

Made with ❤️ by Muchiri Kinyua
