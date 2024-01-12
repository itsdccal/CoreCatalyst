# CoreCatalyst Gym Website

Welcome to CoreCatalyst Gym, a web application built using Laravel to help you stay fit and achieve your fitness goals. This application provides a user-friendly interface to schedule and track your workouts, making it easier for you to focus on your fitness journey.

## Features

- **User Authentication**: Secure user authentication system to manage your personal account.
- **Workout Scheduler**: Easily schedule and manage your workout routines.
- **Exercise Library**: Access a comprehensive library of exercises with detailed instructions.
- **Progress Tracking**: Monitor your fitness progress over time.
- **Responsive Design**: Enjoy a seamless experience on various devices.

## Getting Started

### Prerequisites

Make sure you have the following installed on your system:

- [PHP](https://www.php.net/) (>= 7.4)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/)
- [Laravel](https://laravel.com/) (>= 8.x)

### Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/itsdccal/CoreCatalyst.git
    ```

2. Navigate to the project directory:

    ```bash
    cd CoreCatalyst
    ```

3. Install dependencies:

    ```bash
    composer install
    ```

4. Copy the `.env.example` file and configure your environment variables:

    ```bash
    cp .env.example .env
    ```

    Update the database and other relevant configurations in the `.env` file.

5. Generate application key:

    ```bash
    php artisan key:generate
    ```

6. Run migrations and seed the database:

    ```bash
    php artisan migrate --seed
    ```

7. Install JavaScript dependencies:

    ```bash
    npm install && npm run dev
    ```

8. Start the development server:

    ```bash
    php artisan serve
    ```

Visit [http://localhost:8000](http://localhost:8000) in your browser to access the CoreCatalyst Gym website.

## Contributing

If you would like to contribute to the development of CoreCatalyst, please follow our [Contribution Guidelines](CONTRIBUTING.md).
