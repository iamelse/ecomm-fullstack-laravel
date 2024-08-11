# Laravel Project Installation Guide

This guide will walk you through the steps to install and set up a Laravel project.

## Prerequisites

Before you begin, ensure you have the following installed on your system:

- **PHP >= 8**
- **Composer**
- **MySQL**

## Installation Steps

### 1. Clone the Repository

First, clone the project repository from GitHub.

```bash
git clone https://github.com/iamelse/ecomm-fullstack-laravel.git

### 2. Navigate to the project directory:

```bash
cd your-laravel-project

### 3. Composer Install

```bash
composer install

### 4. Copy and configure .env file

```bash
cp .env.example .env

### 5. Generate application key

```bash
php artisan key:generate

### 6. Migrate and seed the database

```bash
php artisan migrate:fresh --seed

### 7. Run the server

```bash
php artisan serve

## The Admin and User

for admin go to /admin (email => admin@gmail.com, password => password)
for user go to /dashboard (email => user@gmail.com, password => password)