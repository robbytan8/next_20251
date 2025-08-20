# Laravel Demo for Project NEXT 2025-2026
This is a demo project built with Laravel 12, showcasing various features and functionalities that can be used as a starting point for your learning simple Laravel projects (see commits). How to run this project:
## Install dependencies
Run composer to install the required PHP packages:

```bash
composer install
```
Run npm to install the required JavaScript packages:

```bash
npm install
```
## Set up environment
Copy the `.env.example` file to `.env`:

```bash
cp .env.example .env
```
## Generate application key
Run the following command to generate the application key:

```bash
php artisan key:generate
```
## Run migrations
Run the following command to run the database migrations (make sure database is already created with the name specified in your `.env` file):
```bash
php artisan migrate
```

## Run the application
You can start the development server using the following command:
```bash
php artisan serve
```
This will start the server at `http://localhost:8000` by default. You can access the application in your web browser by navigating to that URL.
