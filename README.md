# Document Management System
This system allows users to manage documents effectively by creating them, attaching them to tags within designated categories set up by administrators. Users have the capability to add comments to both documents and categories, as well as download the documents directly.

Additionally, users can subscribe to categories, ensuring they receive updates about the category through email notifications. These notifications leverage Firebase to provide real-time functionality. The system also tracks visitor counts for both documents and categories, offering insights into engagement levels.

## Installation

Run Migrations and Seeders: Execute the following command to apply database schema changes and populate the database with initial data.
```bash
php artisan migrate --seed
```
Start the Queue Worker: To process background tasks efficiently, start the queue worker with this command.
```bash
php artisan queue:work
```

## Usage

You must create an account or log in with the owner account to be able to send all requests


Owner Information :
```json
{
    'first_name': 'Mohammed',
    'last_name': 'Alsaleh',
    'email': 'eng.mohamad110@gmail.com',
    'password': '12345678'
}
```

You Can View The API Documentation via ([Api Documentation Link]()).

