![💻 PHP_Test](https://github.com/NosisAtlas/PHPTest/assets/71009594/21e18680-0142-464b-898b-5d2fc823d708)

![GitHub last commit (branch)](https://img.shields.io/github/last-commit/NosisAtlas/PHPTest/main)

## Description
This project involves creating a testimonial management system using Laravel. Users can add, view, edit status, and delete testimonials. Testimonials can be displayed either as cards or in a list view.

## Features Implemented

1. Testimonial Management: Users can add new testimonials with a title, message, and optional image attachment.
2. View Testimonials: Testimonials are displayed either as cards or in a list view.
3. Approve Testimonials: Can approve pending testimonials to change their status from "en_attente" to "approuve".
4. Delete Testimonials: Can delete testimonials from the system.
5. Responsive Design: The interface is designed to be responsive, adapting to different screen sizes.

## Technologies Used

- Laravel: Used as the PHP framework for building the web application.
- HTML/CSS: Used for structuring and styling the frontend.
- Bootstrap 5/ Bootstrap Icons : Used for responsive design and icons.
- JavaScript/jQuery: Used for client-side interactivity, including dynamic UI updates.
- MySQL: Used as the database management system for storing testimonials.

## Installation and Setup

1. Clone the repository to your local machine.
2. Run composer install to install PHP dependencies.
3. Copy the .env.example file to .env and configure your database settings.
4. Run php artisan key:generate to generate a new application key.
5. Run php artisan migrate --seed to migrate the database schema and seed the db.
6. Start the Laravel development server with php artisan serve.

## Usage

1. Access the application in your web browser.
2. Add new testimonials using the provided form.
3. View testimonials in either card or list view.
4. Approve, reject or delete testimonials.

## Additional Notes
I will make more updates to the app and add role management and grow the app in another version.

---

## Screenshots

1. Here you'll find the landing page with the form up first.
![landing page 1 - adding testimonial](https://github.com/NosisAtlas/PHPTest/assets/71009594/5ac66efa-7270-4734-baea-5092e197319e)

2. Here you'll find the approved testimonials shown as cards
![landing page 2 - show testimonials as cards](https://github.com/NosisAtlas/PHPTest/assets/71009594/175b3fd1-b7f7-4f21-aec7-3535858d4b39)

3. The two buttons to toggle the view from cards to list
![landing page 2 - show testimonials as list](https://github.com/NosisAtlas/PHPTest/assets/71009594/258dcd92-04d1-42d9-8770-d1506bd56002)

4. All the testimonials as a list
![landing page 3 - show testimonials as list](https://github.com/NosisAtlas/PHPTest/assets/71009594/806084b8-f30d-4b95-8d21-7ff2fb757554)

5. Handling the approval and rejection or the deletion of the testimonials
![landing page 4 - handling approve and reject](https://github.com/NosisAtlas/PHPTest/assets/71009594/c868b6ca-21b5-4657-ac85-53456c84b0e4)

6. Once you click on a row you can drag an drop it on the Y axis and change the order of the testimonials
![landing page 5 - drag and drop](https://github.com/NosisAtlas/PHPTest/assets/71009594/47dfada8-a32e-43c7-8813-de563c5055e6)
