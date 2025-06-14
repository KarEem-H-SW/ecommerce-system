
# 🛒 E-commerce System

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo">
  </a>
</p>

## 📦 Project Description

A full-stack e-commerce system built using **Laravel (REST API)** and **React.js (frontend via Vite)**. This system includes:

- ✅ User authentication (via Laravel Sanctum)
- 🛍️ Product listing with filtering, search, and pagination
- 🛒 Order creation with product validation and stock handling
- 🔐 Protected API endpoints
- 📤 Image upload support
- ⚡ Clean, responsive UI using Material UI (React)
- 📦 RESTful architecture with full backend/frontend separation

---

## 🚀 Live Demo

> Coming soon or deploy to [Render](https://render.com) / [Vercel](https://vercel.com) / [Netlify](https://netlify.com)  
> Example: `https://e-commerce-project.onrender.com`

---

## 🧰 Technologies Used

- **Backend:** Laravel 10+ (API only), Sanctum, Eloquent, MySQL or SQLite
- **Frontend:** React.js (via Vite), Material UI
- **API Auth:** Bearer Token (Sanctum)
- **Deployment Ready:** Works on Render, Forge, shared hosting

---

## ⚙️ Installation

### 1. Clone the repository

```bash
git clone https://github.com/KarEem-H-SW/ecommerce-system.git
cd ecommerce-system
```

### 2. Install backend dependencies

```bash
composer install
cp .env.example .env
php artisan key:generate
```

### 3. Install frontend dependencies

```bash
npm install
```

### 4. Compile React frontend (Vite)

```bash
npm run build
```

### 5. Run database migrations

```bash
php artisan migrate
php artisan storage:link
```

### 6. Start the development server

```bash
php artisan serve
```

---

## 📦 API Authentication

The API uses Laravel Sanctum for authentication:

- Login via `POST /api/login` with email/password
- Store the returned Bearer token
- Send token with future requests in headers:
  ```http
  Authorization: Bearer YOUR_TOKEN
  ```

---

## 📂 Project Structure

```
├── app/
├── resources/
│   └── js/         # React frontend (via Vite)
├── public/
│   └── storage/    # Uploaded product images (linked)
├── routes/
│   ├── api.php     # API routes
├── database/
├── .env
├── vite.config.js
└── ...
```

---

## 🧪 Postman Sample Body

```json
{
  "products": [
    { "product_id": 1, "quantity": 2 },
    { "product_id": 3, "quantity": 1 }
  ]
}
```

---

## 🧠 Credits & Framework

This project uses the Laravel framework:

- Laravel Official Docs: [https://laravel.com/docs](https://laravel.com/docs)
- React Official Docs: [https://reactjs.org/docs](https://reactjs.org/docs)

---

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

## 🤝 Contributions

Pull requests and feedback are welcome! Please open an issue to discuss any changes or improvements.

---

> Built with ❤️ using Laravel + React by [KarEem-H-SW](https://github.com/KarEem-H-SW)
