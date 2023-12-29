# Project Wallpaper App (Untirta - Teknik Informatika)

Project Pemrograman Website dan Mobile dengan tema "Wallpaper App".

> Wallpaper App adalah aplikasi yang menyediakan beragam gambar latar belakang berkualitas tinggi untuk personalisasi layar perangkat Anda. Temukan pilihan menarik dari alam, seni, dan banyak kategori lainnya dalam satu aplikasi mudah digunakan.

## How to run in your vs-code

- composer install --no-dev
- setup .env
- php artisan key:generate
- php artisan config:cache
- php artisan migrate
- php artisan serve

### Contributor

- Rojak Kurniawan
- Abdul Aziz
- Ahmad Rafi Kannajmi
- Muhammad Rizqi Fadhillah
- Dicky Saputra
- Devin Wijaya
- Muhammad Damar Firdaus
- Ilham Ambia
- Aditya Sastraatmaja
- Muhammad Rifqi Arrasyid
- Daffa Dzaky Syahbani
- Muhammad Alviansyah

## API Reference

### Input Image Request
#### POST /api/create

Paramater | Type

images[] file can upload with multiple image

title string provide a title for the image

category string identify category

description string explains about the uploaded image

### Get Information Image Request
#### GET /api/get

Paramater | Type

category string category to display

search string keyword to search into database

### Update Image Request
#### POST /api/update/{id}

Paramater | Type

new_image file insert new image to update

title string new value

category string new value

description string new value


### Delete Image Request
#### DELETE /api/delete/{id}

