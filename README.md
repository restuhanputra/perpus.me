# perpus.me

## Daftar Isi

- [perpus.me](#perpusme)
  - [Daftar Isi](#daftar-isi)
  - [About <a name = "about"></a>](#about-)
  - [Getting Started <a name = "getting_started"></a>](#getting-started-)
    - [Prerequisites](#prerequisites)
    - [Installing](#installing)
  - [Usage <a name = "usage"></a>](#usage-)
  - [Todo <a name = "todo"></a>](#todo-)

## About <a name = "about"></a>
Sebuah **mini *project*** untuk memudahkan transaksi peminjaman buku. mempermudah staff perpustakaan dalam memanajemen baik buku, transaksi peminjaman buku, admin, dan user.

## Getting Started <a name = "getting_started"></a>
Sebelum memulai, Instruksi dibawah ini akan memberikan and cara me-*copy* *project* dan me-*running* pada *local machine* anda baik di laptop atau PC untuk tujuan referensi atau dikembangkan.

### Prerequisites
Software yang harus dibutuhkan dan sudah terinstall yaitu:

Windows
```
1. Node JS
2. Composer
3. Webserver include PHP versi >= 7.2.5  & Database (XAMPP atau WAMP)
4. Browser (Chrome atau Firefox)
5. Text Editor (VS Code atau Sublime atau Atom)
```

Linux
```
1. Node JS
2. Composer
3. Webserver (Apache atau NGINX)
4. Database MariaDB
5. PHP 7 versi >= 7.2.5
6. Browser (Chrome atau Firefox)
7. Text Editor (VS Code atau Sublime atau Atom)
```

### Installing
Langkah demi langkah cara untuk menginstall project ini.

1. Pastikan **Software yang dibutuhkan** sudah **terinstall**
2. Buka Terminal
```
- Windows (Command Prompt, powershell atau GitBash)
- Linux (Urxvt, Alcrity, Suckless Terminal dll)
```
3. Clone project ini
Copy pada terminal misal dengan  Command Prompt
```
git clone https://github.com/reptr/perpus.me.git  /direktori project(htdoc)
```

## Usage <a name = "usage"></a>
1. Pastikan sudah membuat database dengan nama **perpus.me**

2. *Edit* .env
```
DB_DATABASE=perpus.me (nama database)
DB_USERNAME=root      (sesuaikan dengan username database anda)
DB_PASSWORD=          (isi jika anda menggunakan password pada database anda)
```
2. *Composer Install*
```sh
composer install
```
3. *Migrate database*
```sh
php artisan migrate
```
4. *Generate Key*
```sh
php artisan key:generate
```
5. *Finally, Running app*
```sh
php artisan serve
```
## Todo <a name = "todo"></a>
1. Notifikasi
2. Konfirmasi Delete
