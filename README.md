Scoring System Backend - Laravel
This is the backend component of the Scoring System project, developed using Laravel.

Prerequisites
Before running this project, ensure that you have the following prerequisites installed:

PHP (version >= 7.4)
Composer
MySQL

Installation

1. Clone the repository:
2. Navigate to the project directory:
3. composer install
4. Create a copy of the .env.example file and rename it to .env:
5. Generate an application key: php artisan key:generate
6. Configure the database connection by updating the .env file with your database credentials.
7. Run the database migrations: php artisan migrate
8. Start the development server: php artisan serve

Features
API endpoints for managing contestants, categories, and scores.
Authentication and authorization for secure access to the API.
Database migrations for creating the necessary tables.

Usage
Access the API at http://localhost:8000/api.
Use API endpoints to create, update, and retrieve data related to the scoring system.
Secure the API endpoints using authentication and authorization mechanisms.

Contributing
Contributions to this project are welcome. If you find any issues or have suggestions for improvement, please submit an issue or a pull request.

License
This project is open-source and available under the MIT License.
