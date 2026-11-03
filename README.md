# Turismo Real

A tourism website for Vila Real, Portugal, built as an academic multimedia project. Visitors browse a guided itinerary,
tickets, merchandise and articles in English or Portuguese; registered users have a profile and a shopping cart.

**Status:** academic project; runs locally, not deployed.

## Features

- Public pages: itinerary, tickets, merchandise, articles, FAQ, contacts, privacy policy and terms.
- English and Portuguese content (translatable models and language files), with a language switch.
- Registration, login and profile (Laravel Breeze).
- Roles `admin`, `mod` and `regular` (spatie/laravel-permission). Only `admin` can open the Backpack admin panel
  (`/admin`) to manage users; `admin` and `mod` also see the user list on the dashboard. New accounts get `regular`.
- Shopping cart for signed-in users.

## Tech stack

| Layer | Technologies |
|---|---|
| Backend | PHP 8.2 to 8.4, Laravel 10, MySQL |
| Admin and packages | Backpack CRUD 6, Laravel Breeze, spatie/laravel-permission, spatie/laravel-translatable, spatie/laravel-medialibrary, darryldecode/cart |
| Frontend | Blade, Tailwind CSS 3, Vite 4 |

## Getting started

Requires PHP 8.2 to 8.4 (the versions the locked dependencies support) with the `exif` extension, Composer, Node.js and MySQL.

```bash
composer install
cp .env.example .env
php artisan key:generate
```

In `.env`, set the database connection and choose passwords for the two seeded accounts with `SEED_ADMIN_PASSWORD`
and `SEED_USER_PASSWORD` (seeding stops if either is empty). The seeder creates an admin and a regular user with the
emails in `SEED_ADMIN_EMAIL` and `SEED_USER_EMAIL`. Then:

```bash
php artisan migrate --seed
npm ci
npm run build
php artisan serve
```

## Running the tests

The tests use an in-memory SQLite database and need no frontend build:

```bash
php artisan test
```

They cover Laravel Breeze's authentication and profile flows, the public pages (each one answers with the site
content seeded), adding items to the cart, and access control: guests cannot post articles, only admins can manage
users in `/admin`, and the old payment route no longer exists.

## Known limitations

- Checkout is not implemented: the cart has no payment step. An earlier payment route, which took the amount to charge
  from the URL, has been removed.
- Cart prices come from the submitted form, not from the database. This only affects the displayed total, because
  nothing is charged.
- The repository is large (about 100 MB of images).
