# Laravel 10 Project Setup and API Testing

## Prerequisites
Before starting, ensure you have the following installed on your machine:
- PHP 8.2 or higher
- Composer
- Laravel CLI
- Git
- Postman

## Setup Instructions

### Clone the Repository
Clone the project repository using Git:

git clone [<repository-url>](https://github.com/Manojk-1989/role-management.git)

### Navigate to the Project Directory
Change your current directory to the project directory:

cd <project-directory>

### Install Dependencies
Install the project dependencies using Composer:

composer install

### Setup Environment Variables
Create a `.env` file by copying the example environment file:

cp .env.example .env

Generate a new application key:

php artisan key:generate

### Run Database Migrations (Optional)
If your project requires database setup, run the migrations:

php artisan migrate

### Serve the Application
Start the Laravel development server:

php artisan serve

The application should now be running at `http://localhost:8000`.

## API Testing with Postman

### User Dashboard API
1. Open Postman.
2. Create a new GET request.
3. Enter the following URL:

   http://localhost:8000/v2/user-dashboard

4. Go to the **Headers** tab.
5. Add a new header with the key `site` and value `user`.
6. Send the request.

You should receive the following response:

{
    "message": "User dashboard"
}

### Admin Dashboard API
1. Open Postman.
2. Create a new GET request.
3. Enter the following URL:
   http://localhost:8000/v2/admin-dashboard
4. Go to the **Headers** tab.
5. Add a new header with the key `site` and value `admin`.
6. Send the request.

You should receive the following response:

{
    "message": "Admin dashboard"
}

## Additional Notes
- Ensure your Laravel server is running when making API requests.
- If you encounter any issues, check the server logs for more information.

## License
This project is licensed under the MIT License. See the LICENSE file for details.

---

Replace `<repository-url>` and `<project-directory>` with the actual URL of the repository and the name of your project directory respectively. Adjust any other configuration details as necessary for your specific project.