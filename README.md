# Simple Website Model 1

A lightweight PHP starter template for building small websites with clean structure, reusable includes, and simple page routing.

## Overview

This project is designed as a starting point for developers who want a minimal website foundation in PHP + MySQL. It includes:

- Centralized site configuration (`inc/conf.php`)
- Database connection bootstrap (`inc/func/_db_.php`)
- Reusable layout partials (`inc/pg/header.php` and `inc/pg/footer.php`)
- Basic route handling via URL query parameter (`index.php`)
- Bootstrap integration through CDN

## Main App Features

- **Config-driven metadata**
  - Define language, title, description, tags, author, and copyright in one place.
  - Values are automatically used in the HTML `<head>` and footer.

- **Reusable page layout**
  - Header and footer are split into include files to avoid duplicated markup.
  - Easy to maintain and scale for additional pages.

- **Simple route switching**
  - `index.php` checks `?p=` in the URL and loads different content blocks.
  - Current route examples:
    - Home (default)
    - `?p=contact-us`
    - `?p=news`

- **MySQL connection setup**
  - Uses `mysqli` with configurable host, user, password, and database name.
  - Includes a basic connection error check for debugging.

- **Bootstrap-ready frontend**
  - Bootstrap CSS/JS loaded from CDN for quick UI development.
  - Ready for rapid prototyping and responsive layouts.

## Project Structure

```text
.
├── index.php
├── inc/
│   ├── conf.php
│   ├── func/
│   │   └── _db_.php
│   └── pg/
│       ├── header.php
│       └── footer.php
└── assets/
```

## Requirements

- PHP 7.4+ (or newer)
- Apache (or any web server with PHP support)
- MySQL/MariaDB

## Quick Start

1. Clone or download this repository.
2. Place the project in your web server root (for example, `htdocs` or `www`).
3. Open `inc/func/_db_.php` and set your database credentials.
4. Open `inc/conf.php` and customize site metadata.
5. Start your server and open the project URL in your browser.

## URL Examples

- Home page: `http://localhost/Simple-Website-Model-1/`
- Contact page: `http://localhost/Simple-Website-Model-1/?p=contact-us`
- News page: `http://localhost/Simple-Website-Model-1/?p=news`

## Notes

- This template is intentionally minimal and meant to be extended.
- You can replace route blocks in `index.php` with includes/controllers as your project grows.
- If you add local CSS/JS files, make sure the referenced paths in `header.php` and `footer.php` exist.

## License

You are free to use, edit, and distribute this project.
