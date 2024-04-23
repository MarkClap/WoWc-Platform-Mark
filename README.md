# Use

Here's how to install and configure the Laravel project, along with its dependencies, so you can start working on it.

## Prerequisites

Before starting the installation, make sure you have the following prerequisites installed on your system:

- PHP >= 8.2
- Composer (for PHP dependency management)
- PostgreSQL
- Node.js and npm (for Node.js package management, optional depending on your project)

## Installation

Follow these steps to install and configure the project:

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/your_username/your_fork_name.git
   ```

2. **Install PHP Dependencies:**
   ```bash
   cd your_fork_name
   composer install
   ```

3. **Environment Configuration:**
   - Copy the `.env.example` file and rename it to `.env`.

4. **Generate a Key:**
   ```bash
   php artisan key:generate
   ```

5. **Run Migrations and Seeders:**
   ```bash
   php artisan migrate --seed
   ```

6. **Install Frontend Dependencies:**
   Install Node.js dependencies:
   ```bash
   npm install
   ```

7. **Compile Assets:**
   ```bash
   npm run dev
   ```

8. **Development Server:**
   Start the Laravel development server:
   ```bash
   php artisan serve
   ```

Now everything should be correctly installed and configured on your system. You can access the application from your web browser at `http://localhost:8000`.