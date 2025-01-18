# laravel11-jwt-rest-api-developed-by-shiplu
 laravel11-jwt-rest-api-developed-by-shiplu

# Installation Process
Step 1: Clone the repository to your local machine

```bash
git clone https://github.com/shiplu2111/laravel11-jwt-rest-api-developed-by-shiplu.git
```

Step 2: Navigate to the project directory

```bash
cd laravel11-jwt-rest-api-developed-by-shiplu
```

Step 3: Install dependencies

```bash
composer install
```

Step 4: Copy the .env.example file to .env

```bash
cp .env.example .env
```

Step 5: Generate the application key

```bash
php artisan key:generate
```

Step 6: Run the database migrations

```bash
php artisan migrate:fresh --seed
```
Step 7: JWT Secret Key Generation

```bash
php artisan jwt:secret
```

Step 8: Start the development server

```bash
php artisan serve
```

Step 9: Open your web browser and navigate to http://127.0.0.1:8000



This project is open-sourced software .

Feel free to open a pull request if you want to contribute to this project.

For any questions, please contact me at [shiplu2111](https://github.com/shiplu2111)
Email: me@shiplujs.com
