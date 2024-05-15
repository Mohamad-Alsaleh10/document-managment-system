# Document Management System
Where you can create documents and attach them to tags belonging to specific categories created by the admin.
As a user, you can comment on these documents or categories, and you can also download the documents
In addition, you can follow categories, and this will keep you fully informed of this category
By sending an email to your account
And through notifications prepared in Firebase to enjoy the real-time feature.
In addition to calculating the number of visitors to documents and categories.


## Installation

You Must run the migrations and seeders:
```bash
php artisan migrate --seed
```
The queue must also be running
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

