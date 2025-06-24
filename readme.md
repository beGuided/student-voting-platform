# Voting System for FCE

##################################
## This is he official web voting platform for THE FEDERAL COLLEDE OF EDUCATION (TECHNICAL) AKOKA
########################################################################

## PLATFORM FEATURES:
- Realtime vote monitor page
- cast vote 
- dashboard for administrative purposes
- analysis votes and statistics
- 

### HOW TO USE THE PLATFORM

To run this project on your local machine, follow these steps:

Step 1: Clone the Repository
Clone this repository to your local machine using Git:
git clone https://github.com/beGuided/student-voting-platform.git

NB ensure you have wamp server online and active.

Step 2: Install Dependencies
Run the following command in the project directory:
composer install

Step 3: Configure Environment
1. Copy the `.env.example` file to `.env`:
cp .env.example .env

2. Generate an application key:
php artisan key:generate

3. Configure your database settings in the `.env` file.

Step 4: Migrate Database
Run the following command to migrate the database:
php artisan migrate

Step 5: Serve the Application
Run the following command to start the Laravel development server:
php artisan serve

Step 6: Access the Application
Open a web browser and navigate to `http://localhost:8000`.


Requirements

- PHP
- Composer
- Laravel
- wamp server

Troubleshooting

If you encounter any issues, check the following:

- Ensure dependencies are installed correctly.
- Verify database settings in the `.env` file.
- Check for any Laravel version compatibility issues.

Contributing

Feel free to contribute to this project by submitting pull requests or issues.

That's it! With thect on your local machine.
NB: 

### ACCESS TO ADMIN LOGIN
the website domain name/admin
the defult admin credentials is
* username: admin@email.com
* password: 123456

### TOOLS USED AND API
-laravel 
-Bootstap
-Html
-Javascript
- CSS
