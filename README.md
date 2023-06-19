### laravel chat app for demo purposes
aplikasi demo realtime chat menggunakan laravel websocket.

## ERD
![url](https://im.ge/i/icgGMF)

## requirement
- laravel 9
- php 8.0
- laravel breeze using blade (for UI and auth scaffolding)

## Memulai
- `composer install`
- `composer update psr/http-message:"1.1"`
- `php artisan key:generate`
- `npm install`
- `cp .env.example .env`
- `php artisan migrate::fresh --seed`
- `php artisan serve`
- `php artisan websocket:serve --host=0.0.0.0 -q`
- `npm run dev`

buka http://localhost:8000/login ambil salah satu email pada database, password: `password`

### websocket dashboard
- buka http://localhost:8000/laravel-websockets

### catatan
- jika ada perubahan APP_URL di local env adjust file vite.config.js bagian host 
```
server: {
          https: false,
          host: 'demo-chat-laravel-websocket.test',
        }
```

### channel
- private - no auth
- presence - user know each other
- private - user dont know each other

#### reference
1. laravel websocket (free) php - (pusher compatible) https://github.com/beyondcode/laravel-websockets
2. laravel echo client - https://www.npmjs.com/package/laravel-echo

