# Initial Setup

## 1. Clone the repository
Find a location on your computer where you want to store the project. A directory made for projects is generally a good choice.

Launch a bash console there and clone the project.

## 2. cd into the project
`cd project_name`

## 3. Install composer dependencies
`composer install`

## 4. Install NPM dependencies
`npm install`

## 5. Copy the .env file
`cp .env.example .env`

## 6. Generate an app encryption key
`php artisan key:generate`

## 7. Create an empty database for the application
Create an empty database for your project.

## 8. In the .env file, add database information to connect to the database
In the .env file fill in the 
- **DB_HOST**
- **DB_PORT**
- **DB_DATABASE**
- **DB_USERNAME**
- **DB_PASSWORD** 

## 9. Migrate the database
`php artisan migrate`

## 10. Seeding
`php artisan db:seed`


## Local development server
To run a local development server you may run the following command. This will start a development server at **http://localhost:8000**.

`php artisan serve`

## API Routes 
- GET
`http://localhost:8000/api/transactions`

- GET 
`http://localhost:8000/api/orders`

- POST
`http://localhost:8000/api/transactions`  
```
{
  "user_id": 1,
  "order_id": 10,
  "crypto_id": 2,
  "type": "buy",
  "amount": 0.12345678,
  "status": "pending",
  "price": 150.50
}
```
- POST
`http://localhost:8000/api/orders`
```
{
    "user_id": 1,
    "crypto_id": 1,
    "type": "buy",
    "amount": 0.5,
    "price": 40000
}
```
