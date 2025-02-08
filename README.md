# Blank WordPress Template

This project is a **blank WordPress template** designed to help you kick-start your web development projects using **WordPress** as a CMS (Content Management System). The goal is to provide a streamlined foundation for building a website with pre-configured settings, saving time and effort.

## 🚀 Features
- **WordPress** serves as the CMS with ACF and Safe SVG plugins.

## 🛠️ Requirements
To run this project, make sure you have the following:

- **Node.js**: Version 16 or above
- **PHP**: Version 7.4 or above
- **WordPress**: Latest version
- **MySQL**: Database for WordPress

## 📦 Installation
### 0. Create those folders

````bash
git clone https://github.com/yourusername/blank-wordpress-template.git
cd blank-wordpress-template
mkdir backend
````
### 1. Install WordPress
- Download the latest version of WordPress.
- Extract it into your backend directory.
- Configure the wp-config.php file with your database credentials.

``
### 2. Install WordPress Plugins
ACF (Advanced Custom Fields): For creating custom content fields within WordPress.
Safe SVG: Allows the safe upload and use of SVG files in WordPress.

You can install these plugins directly via the WordPress admin dashboard or download and place them in the wp-content/plugins directory.

- Active the theme and all the presets plugins

### 5. Run the Project

````bash
cd wp-content/themes/blank
npm install
npm run dev
