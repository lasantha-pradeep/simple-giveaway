# Laravel Giveaway Data Collection Form

This is a simple Laravel 11 application for collecting giveaway data through a form. The project uses **Laravel Breeze** with Blade templates for authentication and UI. Submitted data is encrypted and securely stored in the database. The data can be viewed in the admin area by registered users.

---

## Features

- **Laravel 11 Framework**: Built on the latest version of Laravel.
- **Laravel Breeze**: Provides lightweight authentication and Blade-based UI templates.
- **Data Encryption**: Ensures all submitted data is securely encrypted before storage.
- **Admin Area**: Registered users can log in to view the submitted data.
- **Simple and Responsive Design**: User-friendly form for data collection.

---

## Requirements

- PHP >= 8.1
- Composer
- MySQL or any supported database
- Node.js and npm (for front-end dependencies)
- Laravel 11 installed

---

## Installation

### 1. Clone the Repository
```bash
git clone https://github.com/lasantha-pradeep/simple-giveaway.git
cd laravel-giveaway
```

### 2. Install Dependencies
```bash
composer install
npm install && npm run dev
```

### 3. Environment Setup
- Copy the `.env.example` file to `.env`:
  ```bash
  cp .env.example .env
  ```
- Configure database credentials and other environment variables in the `.env` file.

### 4. Generate Application Key
```bash
php artisan key:generate
```

### 5. Run Migrations
```bash
php artisan migrate
```

### 6. Start the Development Server
```bash
php artisan serve
```

---

## Usage

1. Access the application in your browser at `http://localhost:8000`.
2. Use the form on the home page to submit giveaway data.
3. Log in to the admin area as a registered user to view the encrypted data.

---

## Security

- All submitted data is encrypted using Laravel's built-in encryption mechanisms.
- Ensure your application is running over HTTPS in production to secure data in transit.

---

## File Structure

- **`resources/views`**: Contains Blade templates for the form and admin area.
- **`app/Models`**: Includes models for handling encrypted data.
- **`routes/web.php`**: Defines the routes for the form and admin area.
- **`app/Http/Controllers`**: Contains controllers for handling form submissions and admin actions.

---

## Contributing

Feel free to fork this repository and submit pull requests. Any contributions are appreciated!

---

## License

This project is open-source and available under the [MIT License](LICENSE).

---

### Author

Developed by [Lasantha Pradeep](https://github.com/lasantha-pradeep).

