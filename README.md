# Turismo Real

A tourism website for Vila Real, Portugal, built as an academic multimedia project. Visitors browse a guided itinerary,
tickets, merchandise and articles in English or Portuguese; registered users have a profile and a shopping cart.

**Status:** academic project; runs locally, not deployed.

## Features

- Public pages: itinerary, tickets, merchandise, articles, FAQ, contacts, privacy policy and terms.
- English and Portuguese content (translatable models and language files), with a language switch.
- Registration, login and profile (Laravel Breeze).
- Roles `admin` and `regular` (spatie/laravel-permission) and a Backpack admin panel for user management (`/admin`).
- Shopping cart for signed-in users.

## Tech stack

| Layer | Technologies |
|---|---|
| Backend | PHP 8.1+, Laravel 10, MySQL |
| Admin and packages | Backpack CRUD 6, Laravel Breeze, spatie/laravel-permission, spatie/laravel-translatable, spatie/laravel-medialibrary, darryldecode/cart |
| Frontend | Blade, Tailwind CSS 3, Vite 4 |

## Getting started

Requires PHP 8.1+ with the `exif` extension, Composer, Node.js and MySQL.

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

## Known limitations

- Checkout is not implemented: the cart has no payment step. An earlier payment route, which took the amount to charge
  from the URL, has been removed.
- Cart prices come from the submitted form, not from the database. This only affects the displayed total, because
  nothing is charged.
- Automated tests are the Laravel Breeze defaults plus a regression test for the removed payment route. Most Breeze
  tests currently fail: the user factory's fixed password hash does not match the test hashing configuration.
- The repository is large (about 100 MB of images).
