
# Installation

This document explains how to install and configure the Laravel project, along with its dependencies, so you can start working on it.

## Prerequisites

Before starting the installation, make sure you have the following prerequisites installed on your system:

- PHP >= 8.2
- Composer (for PHP dependency management)
- PostgreSQL
- Node.js and npm (for Node.js package management, optional depending on your project)

## Installation

Follow these steps to install and set up the project:

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/your_username/your_project.git
   ```

2. **Install PHP Dependencies:**
   ```bash
   cd your_project
   composer install
   ```

3. **Environment Configuration:**
   - Copy the `.env.example` file and rename it to `.env`.

4. **Run Migrations and Seeders:**
   ```bash
   php artisan migrate --seed 
   ```

5. **Install Frontend Dependencies:**
   Install Node.js dependencies:
   ```bash
   npm install
   ```

6. **Compile Assets:**
   Compile assets if necessary for your project:
   ```bash
   npm run dev
   ```

7. **Development Server:**
   Start the Laravel development server:
   ```bash
   php artisan serve
   ```

Now the Laravel project and its dependencies should be correctly installed and configured on your system. You can access your application from your web browser at `http://localhost:8000`.
