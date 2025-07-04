# Çalışan Yönetim Sistemi

Basit bir web tabanlı **Çalışan Yönetim Sistemi**.  
Bu proje ile çalışan, departman ve maaş bilgilerini bir form aracılığıyla veritabanına ekleyebilirsiniz.

## 📌 Özellikler

- Yeni çalışan ekleme (kişisel ve iş bilgileri)
- Yeni departman ekleme
- Çalışana bağlı maaş ekleme

## 🧰 Kullanılan Teknolojiler

- **Frontend (Arayüz):** HTML, CSS
- **Backend (Sunucu):** PHP
- **Veritabanı:** MySQL
- Geliştirme ortamı için: **XAMPP** veya **WAMP**

### Gereksinimler

✅ Aşağıdakilerin bilgisayarınızda yüklü olması gerekir:
- PHP >= 7.4
- MySQL >= 5.x
- Apache Web Sunucusu
- XAMPP / WAMP / LAMP (tercihen)

### 📥 Kurulum Adımları

1️⃣ Bu repoyu klonlayın:
```bash
git clone https://github.com/kullanici-adiniz/calisan-yonetim-sistemi.git

2️⃣ Veritabanını hazırlayın:

MySQL'de task2db adında bir veritabanı oluşturun.

Aşağıdaki SQL sorguları ile tabloları oluşturun:

CREATE TABLE employees (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    department_id INT(11) NOT NULL,
    job_title VARCHAR(50) NOT NULL,
    hire_date DATE
);

CREATE TABLE departments (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    depname VARCHAR(255)
);

CREATE TABLE salaries (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    employee_id INT(11),
    amount INT(11),
    payment_date DATE
);

3️⃣ Dosyaları web sunucusunun kök dizinine kopyalayın:
htdocs/calisan-yonetim-sistemi/

4️⃣ XAMPP/WAMP üzerinden Apache ve MySQL servislerini başlatın.

5️⃣ Tarayıcıdan açın:
http://localhost/calisan-yonetim-sistemi/index2.php

📄 Dosya Yapısı
Dosya                  	 Açıklama
index2.php               Form arayüzü
action2.php	             Formdan gelen veriyi işleyip veritabanına ekler


📧 Katkıda Bulunma
Katkılarınızı memnuniyetle karşılarım!
Hatalar ve öneriler için lütfen issue açın veya pull request gönderin.
