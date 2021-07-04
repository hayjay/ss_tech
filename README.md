

## Setup & Installation.

The following process can be used to install, setup and test the functonalities:

- Clone this repository.
- CD into the project folder on your local machine.
- Run ```composer install```.
- Duplicate the content of the env.example file and create a .env file in the project directory
- Open the .env file and set the necessary database credentials to conform to your local configuration and settings  dont forget to create a database on your local machine.
- To create the necessary database, run ```php artisan migrate```.
- To database dummy data run ```php artisan db:seed```.
- To test the application feature tests run ```php artisan test```.