import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
  plugins: [
    laravel({
      // input: ['resources/css/app.css', 'resources/js/app.js'],
      input: [
        'resources/sass/app.scss', // Changed from css/app.css
        'resources/js/app.js',
        'resources/css/welcome.css', // Added this file
      ],
      refresh: true,
    }),
    tailwindcss(),
  ],
});
