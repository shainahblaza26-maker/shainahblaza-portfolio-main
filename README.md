# Shainah Mae B. Blaza — Personal Portfolio

A static, single-page personal portfolio website built with **Laravel 13** and **Blade**. All content is hardcoded in PHP arrays and rendered through Blade templates — there is **no database, no Eloquent models, and no migrations**.

The layout follows the structural and stylistic patterns of the [Resto design template](https://themewagon.github.io/resto/) (used as a reference only — no content or images were copied).

---

## About

This portfolio introduces the owner, Shainah Mae B. Blaza, an **Information Technology student (BSIT)** at Data Center College of the Philippines. It presents her background, education, certificates, and projects, and provides multiple ways to get in touch — everything on a single page.

---

## Sections & Features

- **Home (hero)** — greeting, role, and quick action buttons ("Explore My Work" and "Contact Me").
- **About** — portrait photo, short bio, and contact details.
- **Education** — cards for secondary school (2022–2023) and tertiary BSIT program (2026–Present, 4th year).
- **Certificates** — framed image cards for certifications and achievements.
- **Projects** — image cards with title, description, and technology tags. Clicking a project photo opens a full-screen **lightbox** (with an X button, backdrop click, or `Esc` to close).
- **Contact** — email, phone, location, and GitHub details, plus a "Say hello" card with a `mailto:` button and social links.
- **Footer** — brand, **Quick Links**, contact info, a **GitHub profile link**, and social icons.
- **Navigation** — sticky top bar with anchor links (each with a Font Awesome icon) and a **hamburger menu** that collapses the nav on mobile.
- **Dark / Light theme** — a sun/moon toggle in the top-right of the nav; the preference is persisted in `localStorage` (no server-side storage).
- **Polish** — smooth scroll between sections, hover/transition effects on cards and buttons, and full responsiveness across mobile, tablet, and desktop.

---

## Technologies Used

- **PHP 8.3** and **Laravel 13** with the **Blade** templating engine
- **Vite** (via `laravel-vite-plugin`) for asset bundling
- **Vanilla JavaScript** (`resources/js/app.js`) for the theme toggle, mobile menu, and lightbox
- **Custom CSS** (`resources/css/app.css`) — CSS custom properties for light/dark themes, no CSS framework
- **Font Awesome 6** (CDN) for button and navigation icons
- **Google Fonts** — Playfair Display (headings) and Inter (body)
- **Inline SVG icons** as reusable Blade icon components
- **No database** — session/cache drivers set to `file`, database connection is never used

---

## Project Structure

```
├── public/
│   ├── images/                 # profile, certificate, and project images
│   └── build/                  # compiled Vite assets (manifest + bundles)
├── resources/
│   ├── css/app.css             # all styles: themes, layout, hover effects
│   ├── js/app.js               # theme toggle, mobile nav, lightbox behaviour
│   └── views/
│       ├── home.blade.php      # assembles all section partials
│       ├── layouts/app.blade.php
│       ├── partials/           # nav, hero, about, education, certificates,
│       │                        #   projects, contact, footer
│       └── components/icons/   # reusable inline SVG icons
├── routes/web.php              # single route + all content passed as PHP arrays
├── PROMPT_LOG.md / .docx       # build prompt log and Word report
└── vite.config.js
```

All site content lives in `routes/web.php` as plain PHP arrays (`$profile`, `$education`, `$certificates`, `$projects`, `$socials`, `$contact`, `$nav`) and is passed to the views — editing content there updates the site without touching a database.

---

## How to Run Locally

**Requirements:** PHP **8.3+**, Composer, and Node.js. Laravel 13 requires PHP 8.3; on this machine the default `php` on the PATH is 8.0.30, so the bundled 8.3 binary (`C:\xampp\php83\php.exe`) must be used explicitly.

```bash
# 1. Install PHP dependencies
composer install

# 2. Create the environment file and generate the app key
copy .env.example .env
C:\xampp\php83\php.exe artisan key:generate

# 3. Install and build the frontend assets
npm install
npm run build          # or: npm run dev   (watch mode)

# 4. Start the development server
C:\xampp\php83\php.exe artisan serve
```

Then open **http://127.0.0.1:8000** in your browser.

No database configuration or migration is required — the site is fully static and never queries a database.

---

## Tests

A PHPUnit feature test asserts that the home page returns a successful (200) response:

```bash
C:\xampp\php83\php.exe artisan test
```