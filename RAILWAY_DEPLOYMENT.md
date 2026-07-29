# 🚂 Railway Deployment Guide - All Clean Laundry

## 📋 Langkah-langkah Deploy ke Railway

### 1️⃣ Persiapan Database di Railway

1. Login ke [Railway.app](https://railway.app)
2. Klik **"New Project"**
3. Pilih **"Deploy from GitHub repo"** atau **"Empty Project"**
4. Setelah project dibuat, klik **"+ New"** → **"Database"** → **"Add MySQL"**
5. Railway akan membuat MySQL instance dan generate credentials otomatis

### 2️⃣ Set Environment Variables

1. Di Railway Dashboard, buka project Anda
2. Klik service aplikasi Anda (bukan database)
3. Masuk ke tab **"Variables"**
4. Tambahkan environment variables berikut:

```bash
# App Config
APP_NAME=All Clean Laundry
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-app-name.up.railway.app

# IMPORTANT: Generate APP_KEY dengan command:
# php artisan key:generate --show
# Copy hasilnya dan paste ke sini
APP_KEY=base64:YOUR_GENERATED_KEY_HERE

# Database - Railway akan auto-inject ini jika MySQL service sudah terhubung
# Atau Anda bisa set manual dari MySQL service credentials
DB_CONNECTION=mysql
DB_HOST=${{MYSQLHOST}}
DB_PORT=${{MYSQLPORT}}
DB_DATABASE=${{MYSQLDATABASE}}
DB_USERNAME=${{MYSQLUSER}}
DB_PASSWORD=${{MYSQLPASSWORD}}

# Session & Cache
SESSION_DRIVER=database
SESSION_LIFETIME=120
CACHE_STORE=database
QUEUE_CONNECTION=database

# Logs
LOG_CHANNEL=stack
LOG_LEVEL=error
```

### 3️⃣ Generate APP_KEY

Jalankan di local (XAMPP):
```bash
cd C:\xampp\htdocs\WebsiteLaundryProjekWeb
php artisan key:generate --show
```

Copy hasilnya (format: `base64:xxxxxxxxxxxxx`) dan paste ke Railway Variables sebagai `APP_KEY`

### 4️⃣ Connect GitHub Repository

1. Di Railway Dashboard, klik **"Connect Repo"**
2. Pilih repository GitHub Anda
3. Railway akan auto-detect Dockerfile dan mulai build

**ATAU** jika belum push ke GitHub:

```bash
cd C:\xampp\htdocs\WebsiteLaundryProjekWeb
git init
git add .
git commit -m "Initial commit for Railway deployment"
git branch -M main
git remote add origin https://github.com/YOUR_USERNAME/YOUR_REPO.git
git push -u origin main
```

### 5️⃣ Link Database ke Application Service

1. Di Railway Dashboard, klik service aplikasi Anda
2. Masuk ke tab **"Settings"**
3. Scroll ke bagian **"Service Variables"**
4. Klik **"+ New Variable"** → **"Add Reference"**
5. Pilih MySQL service yang sudah dibuat
6. Railway akan otomatis inject `${{MYSQLHOST}}`, `${{MYSQLPORT}}`, dll

### 6️⃣ Deploy!

1. Railway akan otomatis build dan deploy setelah Anda push ke GitHub
2. Monitor progress di tab **"Deployments"**
3. Cek logs di tab **"Logs"** untuk memastikan:
   - ✅ Nginx started on PORT=xxxx
   - ✅ Migration ran successfully
   - ✅ Seeder ran successfully

### 7️⃣ Verify Deployment

1. Buka URL yang diberikan Railway (format: `https://xxx.up.railway.app`)
2. Test endpoint:
   - `/` - Homepage (harus muncul halaman depan)
   - `/up` - Health check (harus return 200 OK)
   - `/login` - Login kasir
3. Cek apakah data layanan muncul di homepage
4. Test fitur cek status pesanan

---

## 🔧 Troubleshooting

### Error: "Application failed to respond"

**Penyebab:**
- Database belum terkoneksi
- Environment variables belum diset
- Migration gagal

**Solusi:**
1. Cek Railway Logs untuk error message spesifik
2. Pastikan MySQL service sudah running
3. Verify environment variables sudah diset dengan benar
4. Re-deploy dengan klik **"Redeploy"**

### Error: "SQLSTATE[HY000] [2002] Connection refused"

**Penyebab:** Database credentials salah atau MySQL service belum linked

**Solusi:**
1. Cek tab **"Variables"** - pastikan `DB_HOST`, `DB_PORT`, dll sudah ada
2. Link ulang MySQL service ke application service
3. Restart deployment

### Error: Migration failed

**Penyebab:** Tabel sudah ada atau database error

**Solusi:**
1. Login ke MySQL via Railway CLI atau external tool
2. Drop semua tabel: `DROP DATABASE nama_database; CREATE DATABASE nama_database;`
3. Re-deploy aplikasi

### Error: 404 Not Found untuk assets (images, css, js)

**Penyebab:** File assets belum ter-commit ke git

**Solusi:**
1. Pastikan folder `public/images/` dan `public/build/` ada di repository
2. Cek `.gitignore` - pastikan folder tersebut tidak di-ignore
3. Commit dan push ulang

---

## 📊 Database Tables yang Dibuat

Setelah deployment sukses, database akan memiliki tabel:

1. **layanans** - 33 rows (semua layanan laundry)
2. **pesanan** - kosong (akan diisi saat ada transaksi)
3. **users** - kosong (dari Laravel default migration)
4. **cache** - untuk caching (dari Laravel default migration)
5. **jobs** - untuk queue (dari Laravel default migration)

---

## 🎯 Post-Deployment

### Update APP_URL

Setelah deployment sukses, Railway akan memberikan URL permanen. Update environment variable:

```
APP_URL=https://your-actual-domain.up.railway.app
```

### Setup Custom Domain (Optional)

1. Di Railway Dashboard → Settings → Domains
2. Klik **"Generate Domain"** atau **"Custom Domain"**
3. Ikuti instruksi untuk setup DNS

### Monitor Application

Railway menyediakan:
- **Metrics**: CPU, Memory, Network usage
- **Logs**: Real-time application logs
- **Deployments**: History dan rollback

---

## 💰 Railway Pricing

- **Free Tier**: $5 credit/month (cukup untuk development/testing)
- **Pro Plan**: $5/month untuk $5 credit + $0.000231/GB-hour
- MySQL Plugin: ~$5/month (1GB storage)

**Estimasi biaya:** $5-10/month untuk aplikasi kecil-menengah

---

## 🔄 Re-deploy Setelah Update Code

```bash
git add .
git commit -m "Update fitur xxx"
git push origin main
```

Railway akan otomatis detect changes dan re-deploy.

---

## 📞 Support

Jika ada masalah, cek:
1. Railway Logs (paling penting!)
2. Railway Discord Community
3. Railway Documentation: https://docs.railway.app

---

**Dibuat:** 2026-07-29  
**Tech Stack:** Laravel 12 + PHP 8.2 + MySQL + Nginx + Docker
