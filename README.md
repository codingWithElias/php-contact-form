# PHP Contact Form using PHPMailer

This project is a simple PHP-based contact form that allows users to send messages directly to your email using **PHPMailer**. It integrates with Gmail’s SMTP using an App Password, ensuring secure email delivery.

## Features
- Simple and responsive contact form.
- Sends messages directly to the admin's email.
- Uses **PHPMailer** for secure email transmission.
- Supports HTML email formatting.
- Basic validation for form inputs.

## Technologies Used
- PHP
- PHPMailer (for sending emails)
- HTML & CSS (for the frontend contact form)
- Gmail SMTP (with App Password)

## Full Tutorial On Youtube
[Tutotial Link](https://youtu.be/hrm-q5D_3-0)

## Installation & Setup

### Step 1: Clone the Repository
```bash
git clone https://github.com/codingWithElias/php-contact-form.git
```
### Step 2: Install PHPMailer via Composer 
If you don’t have Composer installed, install it from Composer's official site.

Navigate to the project directory and run the following command to install PHPMailer:
```bash
composer require phpmailer/phpmailer
```
Or Download it From This [Link ](https://github.com/PHPMailer/PHPMailer)
### Step 3: Configure the Email Settings
In the **contact.php** file, update the following variables with your Gmail account and App Password:

```php

$mail->Username = 'your-email@gmail.com';  // Your Gmail email address
$mail->Password = 'your-app-password';     // Your Gmail App Password
$mail->addAddress('your-email@gmail.com'); // Your Gmail email address
```
To create an App Password, follow Google's guide on setting up App Passwords.

## Steps to Create an App Password in Gmail:
- Enable 2-Step Verification: Before you can create an App Password, you must enable 2-Step Verification for your Google account.
- Go to Google Account Security. Scroll down to the Signing in to Google section.
Find 2-Step Verification and turn it on. You’ll be prompted to set up a secondary verification method (usually your phone number).
- Generate an App Password: Once 2-Step Verification is enabled, follow these steps to create an App Password.
- Go to your Google Account Security page. Under the Signing in to Google section, look for the App passwords option.
- Sign in again if prompted. In the Select the app and device you want to generate the app password for section: Choose "Other (Custom name)" from the drop-down list.
Name it something like "PHPMailer" or "My App" for identification purposes.
- Click Generate. Google will now generate a 16-character App Password (without spaces). Copy this password.

### Step 4: Run the Project
To run the project on a local development server, ensure that you have a local PHP server like XAMPP or MAMP installed. Place the project in your server's root directory (e.g., /htdocs for XAMPP).

How It Works
The user fills out the Name, Email, Subject, and Message fields in the contact form on index.php.
Upon form submission, the data is validated, and the email is sent using the PHPMailer library through Gmail’s SMTP server.
The form displays success or error messages based on whether the email was sent successfully or not.


## License
This project is open-source and available under the MIT License.

## Contributing
Feel free to submit pull requests or open issues to improve the functionality or fix any bugs.