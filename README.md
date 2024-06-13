# Real-Time Chat Application Using Laravel

**Real-Time Chat Application Using Laravel** is a robust and secure real-time chat application designed to facilitate instant communication between users. Built with Laravel, Vue.js, and Pusher, it leverages modern web technologies to provide a seamless and interactive messaging experience. The application features user authentication powered by Laravel Sanctum and Jetstream Inertia, ensuring secure access and user management.

## Features

- Real-time messaging
- User authentication and registration
- Secure API endpoints with Laravel Sanctum
- Interactive UI with Vue.js
- Real-time updates with Pusher

## Requirements

- PHP 7.3 or higher
- Composer
- Node.js & NPM
- Laravel 8 or higher
- MySQL or other database supported by Laravel
- Pusher account

## Installation

1. **Clone the repository:**
    ```bash
    git clone https://github.com/wonderakwei/real-time-chat-application-using-laravel.git
    cd real-time-chat-application-using-laravel
    ```

2. **Install dependencies:**
    ```bash
    composer install
    npm install
    ```

3. **Setup environment variables:**
    Copy the `.env.example` file to `.env` and update the necessary configurations, especially the database and Pusher credentials:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. **Configure Pusher:**
    Update your `.env` file with your Pusher credentials:
    ```env
    PUSHER_APP_ID=your-app-id
    PUSHER_APP_KEY=your-app-key
    PUSHER_APP_SECRET=your-app-secret
    PUSHER_APP_CLUSTER=your-app-cluster
    ```

5. **Run migrations:**
    ```bash
    php artisan migrate
    ```

6. **Install Laravel Echo Server (optional for local development):**
    ```bash
    npm install -g laravel-echo-server
    laravel-echo-server init
    ```

7. **Build front-end assets:**
    ```bash
    npm run dev
    ```

## Usage

1. **Start the Laravel development server:**
    ```bash
    php artisan serve
    ```

2. **Start Laravel Echo Server (if using for local development):**
    ```bash
    laravel-echo-server start
    ```

3. **Access the application:**
    Open your browser and navigate to `http://localhost:8000` to register, log in, and start chatting in real-time.

## Project Structure

- `app/`: Contains the core code of the application, including Models, Controllers, and Events.
- `resources/js/`: Contains the Vue.js components and JavaScript files.
- `resources/views/`: Contains the Blade templates.
- `routes/web.php`: Contains the web routes for the application.
- `config/`: Contains the configuration files, including broadcasting configurations.

## Contributing

Contributions are welcome! Please fork this repository and submit a pull request for any improvements or bug fixes.

## License

This project is open-source and available under the [MIT License](LICENSE).

## Acknowledgements

- [Laravel](https://laravel.com/)
- [Vue.js](https://vuejs.org/)
- [Pusher](https://pusher.com/)
- [Laravel Sanctum](https://laravel.com/docs/sanctum)
- [Jetstream](https://jetstream.laravel.com/)
- [Inertia.js](https://inertiajs.com/)

---

Feel free to adjust any section as per your project's specifics.
