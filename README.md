### laravel chat app for demo purposes
aplikasi demo realtime chat menggunakan laravel websocket.

## requirement
- laravel 9
- php 8.0
- laravel breeze using blade (for UI and auth scaffolding)

## Memulai
- composer install
- composer update psr/http-message:"1.1"
- npm install
- npm run build
- cp .env.example .env
- `php artisan migrate::fresh --seed`
- `php artisan serve`

buka http://localhost:8000/login ambil salah satu email pada database, password: `password`

### websocket dashboard
- buka http://localhost:8000/laravel-websockets

### channel
- private - no auth
- presence - user know each other
- private - user dont know each other

#### reference
1. laravel websocket (free) php - (pusher compatible) https://github.com/beyondcode/laravel-websockets
2. laravel echo client - https://www.npmjs.com/package/laravel-echo

