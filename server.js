import { createServer } from '@inertiajs/server';
import { createApp } from './app'; // tu archivo de configuración de la app Vue (o React)

const server = createServer({
  createApp,
  render: (app) => {
    // Aquí se pasa el app renderizado a Laravel para que lo maneje
    return app;
  }
});

server.listen(3000, () => {
  console.log('SSR server running on port 3000');
});