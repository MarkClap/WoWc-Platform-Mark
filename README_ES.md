
# Instalación

Aquí se explica cómo instalar y configurar el proyecto de Laravel, junto con sus dependencias, para que puedas comenzar a trabajar sobre este.

## Requisitos Previos

Antes de comenzar con la instalación, asegúrate de tener instalados los siguientes requisitos previos en tu sistema:

- PHP >= 8.2
- Composer (para la gestión de dependencias de PHP)
- PostgreSQL
- Node.js y npm (para la gestión de paquetes de Node.js, opcional dependiendo de tu proyecto)

## Instalación

Sigue estos pasos para instalar y configurar el proyecto:

1. **Clona el Repositorio:**
   ```bash
   git clone https://github.com/tu_usuario/tu_proyecto.git
   ```

2. **Instala las Dependencias de PHP:**
   ```bash
   cd tu_proyecto
   composer install
   ```

3. **Configuración del Entorno:**
   - Copia el archivo `.env.example` y renómbralo como `.env`.

4. **Ejecuta las Migraciones y los Seeders:**
   ```bash
   php artisan migrate --seed
   ```

5. **Instala las Dependencias del Frontend:**
   Instala las dependencias de Node.js:
   ```bash
   npm install
   ```

6. **Compila los Assets:**
   Compila los assets si es necesario para tu proyecto:
   ```bash
   npm run dev
   ```

6. **Servidor de Desarrollo:**
   Inicia el servidor de desarrollo de Laravel:
   ```bash
   php artisan serve
   ```

Ahora el proyecto de Laravel y sus dependencias deberían estar correctamente instalados y configurados en tu sistema. Puedes acceder a tu aplicación desde tu navegador web en `http://localhost:8000`.
