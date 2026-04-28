# SQL Injection Demo

## Deskripsi
Project ini merupakan eksperimen sederhana untuk memahami SQL Injection pada sistem login berbasis PHP dan MySQL.

## Fitur
- Login rentan SQL Injection
- Demonstrasi serangan
- Versi perbaikan (prepared statement)

## Cara Menjalankan
1. Import file db.sql ke MySQL
2. Jalankan XAMPP / localhost
3. Akses index.php

## Contoh Serangan
Input:
' OR '1'='1

Hasil:
Login berhasil tanpa password

## Pencegahan
- Prepared Statement
- Validasi input
- Hash password
