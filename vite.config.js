import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  build: {
    outDir: 'public/build',
    assetsDir: '',
  },
  plugins: [
    laravel({
      input: 'resources/js/app.js',
      refresh: true,
    }),
  ],
});
