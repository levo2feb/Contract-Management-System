# Contract Management System 

A web-based Contract Management System built using **CodeIgniter 4** for efficient tracking, storing, and managing contracts. Developed as part of an internship project at **RDSO (Research Designs and Standards Organisation)**.

## 📁 Project Structure

This application follows the default CodeIgniter 4 directory structure: <br>
/ci4 <br>
│ <br>
├── app/ # Application-specific code (Controllers, Models, Views) <br>
├── public/ # Web root                                            <br>
├── system/ # CodeIgniter core framework                          <br>
├── writable/ # Writable directory (cache, logs, uploads)         <br>
├── tests/ # Unit and Feature tests                               <br>
├── .env # Environment configuration                              <br>
├── composer.json # Dependencies and autoload                     <br>
├── spark # CodeIgniter CLI tool                                  <br>


## ✨ Features

- Add, view, edit, and delete contracts
- Secure user authentication and session management
- Organized storage of contract documents
- Search and filter functionality
- PDF generation & download support
- Responsive and clean UI

## 🛠️ Technologies Used

| **Category**       | **Technologies**                                                                                                                                                                                                                         |
|--------------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| **Frontend**        | ![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white) ![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white) ![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white) |
| **Backend**         | ![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white) ![CodeIgniter](https://img.shields.io/badge/CodeIgniter-EE4623?style=for-the-badge&logo=codeigniter&logoColor=white)                       |
| **Database**        | ![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)                                                                                                                                       |
| **Server**          | ![XAMPP](https://img.shields.io/badge/XAMPP-FB7A24?style=for-the-badge&logo=xampp&logoColor=white)                                                                                                                                       |
| **Tools**           | ![Git](https://img.shields.io/badge/Git-F05032?style=for-the-badge&logo=git&logoColor=white) ![Visual Studio Code](https://img.shields.io/badge/VS_Code-007ACC?style=for-the-badge&logo=visual-studio-code&logoColor=white)             |


## ⚙️ Setup Instructions

### 1. Clone the Repository

git clone https://github.com/your-username/contract-management-ci4.git
cd contract-management-ci4

### 2. Configure Environment
- Copy .env or env to set up your local environment: "cp env .env"<br>

- Update database details in .env:<br>
  - database.default.hostname = localhost<br>
  - database.default.database = ci4<br>
  - database.default.username = root<br>
  - database.default.password =<br>

### 3. Install Dependencies
composer install

### 4. Start Development Server
php spark serve
Visit: http://localhost:8080 


## 🔐Login Credentials (for testing)
- You can modify/add users in the users table of the database manually or through seeders.<br>
  - Username: admin
  - Password: admin123

## 📷 Screenshots

- Creating new contract:
<img src="https://github.com/user-attachments/assets/8392fa0c-08c6-42b6-a191-4478eba0e84c" alt="Picture1" width="250" height="200" />


- Displaying all saved data:
 <img src="https://github.com/user-attachments/assets/87481152-0f2a-46bf-b0dc-eee6fa08364f" alt="Picture2" width="700" height="200"   />



# CodeIgniter 4 Framework

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds the distributable version of the framework.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

You can read the [user guide](https://codeigniter.com/user_guide/)
corresponding to the latest version of the framework.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Contributing

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CONTRIBUTING.md) section in the development repository.

## Server Requirements

PHP version 8.1 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> - The end of life date for PHP 8.1 will be December 31, 2025.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
