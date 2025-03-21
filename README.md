<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Laravel Courses with Faker

This Laravel project generates dummy course data using the Faker library for testing and development. It automates database seeding, making it ideal for UI prototyping and debugging.

## Features
- **Laravel Framework** – Structured and scalable development.
- **Faker Integration** – Generates random course data.
- **Database Seeding** – Uses factories and seeders to populate the database.
- **Efficient Data Handling** – Implements Eloquent models for course management.

## Installation
1. Clone the repository:
   ```sh
   git clone https://github.com/mannanshihab/laravel-courses-use-faker.git
   cd laravel-courses-use-faker
   ```
2. Install dependencies:
   ```sh
   composer install
   ```
3. Set up the `.env` file and generate an app key:
   ```sh
   cp .env.example .env
   php artisan key:generate
   ```
4. Run migrations and seed the database:
   ```sh
   php artisan migrate --seed
   ```
5. Start the development server:
   ```sh
   php artisan serve
   ```

## Usage
Visit `http://127.0.0.1:8000` to view generated course data. Modify `DatabaseSeeder.php` to adjust the number of generated records.

## License
This project is open-source and available under the [MIT License](LICENSE).

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
