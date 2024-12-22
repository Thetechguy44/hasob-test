# Library Management System API

This is a RESTful API for a Library Management System built with Laravel 11.

## Features

- CRUD operations for Books, Authors, and Users
- Book borrowing and returning functionality
- Role-based access control (Admin, Librarian, Member)
- Search functionality for books
- API documentation with Swagger/OpenAPI
- Caching for improved performance
- Docker containerization

## Requirements

- PHP 8.2+
- Composer
- Docker and Docker Compose (optional)

## Setup Instructions

1. Clone the repository:
   ```
   git clone https://github.com/yourusername/library-management-system.git
   cd library-management-system
   ```

2. Install dependencies:
   ```
   composer install
   ```

3. Copy the `.env.example` file to `.env` and configure your environment variables:
   ```
   cp .env.example .env
   ```

4. Generate an application key:
   ```
   php artisan key:generate
   ```

5. Run database migrations:
   ```
   php artisan migrate
   ```

6. (Optional) Seed the database with sample data:
   ```
   php artisan db:seed
   ```

7. Start the development server:
   ```
   php artisan serve
   ```

## Running with Docker

1. Build and start the Docker containers:
   ```
   docker-compose up -d --build
   ```

2. Access the application container:
   ```
   docker-compose exec app bash
   ```

3. Run the setup commands (steps 2-6 from the regular setup) inside the container.

## API Documentation

After setting up the project, you can access the API documentation at:

```
http://localhost:8000/api/documentation
```

## Running Tests

To run the feature tests:

```
php artisan test
```

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
