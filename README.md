# Lysoclear – WordPress Theme

![image](https://github.com/user-attachments/assets/cbcc4127-a3a7-40fe-ae3b-9efebcf66f82)


**Lysoclear** – це власна тема для WordPress, створена з нуля для компанії, що займається медичними послугами. Тема розроблена з урахуванням сучасних веб-стандартів, повністю адаптивна та інтегрована з плагінами для покращення функціональності.

---

## 🌟 Особливості теми

- **Повністю адаптивна верстка:** Сайт виглядає чудово на всіх пристроях – від мобільних телефонів до великих екранів.
- **Власна тема з нуля:** Немає використання готових тем або стартових рішень.
- **Редагування через адміністративну панель:** Всі елементи сайту можна змінювати через WordPress без необхідності редагувати код.
- **Використання ACF Pro:** Додаткові поля для контенту створені за допомогою плагіна Advanced Custom Fields.
- **Slick Slider:** Використано для реалізації слайдерів на сторінках "Відгуки" та "Останні новини".
- **Кастомні пости (CPT):** Реалізовано кастомний тип записів для відгуків, який не має архівних посилань.
- **Технології:** HTML, CSS, JavaScript, PHP, WordPress.

---

## 🛠 Технологічний стек

- **CMS:** WordPress
- **Фреймворк:** Bootstrap (адаптивна верстка)
- **Плагіни:**
  - ACF Pro (Advanced Custom Fields)
  - Disable Gutenberg (відключення стандартного редактора)
- **JavaScript бібліотеки:**
  - Slick Slider (для слайдерів)
- **Інструменти розробки:**
  - Trello (організація завдань)
  - GitHub (контроль версій)
  - PHPStorm (IDE для розробки)

---


## 🚀 Інструкції з встановлення

### 1. Клонування репозиторію
```bash
git clone https://github.com/Pavlitoo/lysoclear.git
```

### 2. Встановлення WordPress
Завантажте останню версію WordPress з офіційного сайту: [wordpress.org](https://wordpress.org/).

Встановіть WordPress на вашому сервері.

### 3. Встановлення теми
Перейдіть до папки `wp-content/themes` вашого WordPress проекту.

Скопіюйте папку `lysoclear` у цю директорію.

Активуйте тему в адміністративній панелі WordPress.

### 4. Встановлення плагінів
Перейдіть до розділу "Плагіни" в адміністративній панелі.

Встановіть та активуйте плагіни:
- **ACF Pro**
- **Disable Gutenberg**


### 5. Додавання контенту
Створіть сторінки в WordPress, використовуючи шаблони теми:
- **Головна сторінка** (`page-home.php`)
- **About Us** (`page-about-us.php`)
- **About Lysoclear** (`page-about-lysoclear.php`)
- **Partners** (`page-partners.php`)
- **Contact** (`page-contact.php`)
- **News** (`page-news.php`)
- **Treatment** (`page-treatment.php`)

Додайте контент до сторінок через адміністративну панель.


## 📝 Функціонал теми

### 1. Головна сторінка
- **Слайдер "Останні новини":** Використовує Slick Slider для відображення останніх новин.
- **Слайдер "Відгуки":** Використовує Slick Slider для відображення відгуків клієнтів.

### 2. Сторінка "About Lysoclear"
- Детальна інформація про продукт.
- Використання ACF для додавання додаткових полів.

### 3. Сторінка "Partners"
- Опис партнера.
- Адаптивна верстка для всіх пристроїв.

### 4. Сторінка "Contact"
- Форма зв'язку, реалізована через плагін Contact Form 7.

### 5. Сторінка "News"
- Відображення останніх новин з можливістю перегляду детальної інформації.
- Адаптивна верстка для всіх пристроїв.

### 6. Сторінка "Treatment"
- Опис послуг компанії.
- Використання ACF для додавання додаткових полів.
- Адаптивна верстка для всіх пристроїв.

---

## 🧪 Тестування

### Види тестування
- **Інтеграційне тестування:** Перевірка взаємодії між сторінками.
- **Тестування сумісності:** Перевірка на різних браузерах.
- **Тестування адаптивності:** Перевірка адаптації сайту для різних пристроїв:
  - **Мобільні телефони:** Перевірка відображення та функціональності на пристроях з шириною екрану до 767px.
  - **Планшети:** Перевірка відображення та функціональності на пристроях з шириною екрану від 768px до 1024px.
  - **Десктопи:** Перевірка відображення та функціональності на пристроях з шириною екрану понад 1024px.

---

### Знайдені помилки
- **Деякі блоки не адаптувалися під планшети та мобільні телефони.**

---

### Виправлення
- **Виправлено адаптацію для планшетів та мобільних телефонів:**
  - Додано медіа-запити для різних розмірів екрану.
  - Змінено розміри та відступи елементів для кращого відображення на мобільних пристроях.
  - Перевірено відображення та функціональність на різних пристроях.

---

### Пояснення:
- **Тестування адаптивності:** Додано перевірку адаптації сайту для мобільних телефонів, планшетів та десктопів.
- **Знайдені помилки:** Додано інформацію про помилки, пов'язані з адаптацією.
- **Виправлення:** Описано, як виправлено проблеми з адаптацією та інші помилки.

---

## 📸 Скріншоти

### Головна сторінка
![image](https://github.com/user-attachments/assets/71a52ca1-ce63-4ff6-b663-7d158cb194a2)


### Сторінка "About Lysoclear"
![image](https://github.com/user-attachments/assets/66dfa671-f7f0-4982-a6b1-cd930e80ea9c)

### Сторінка "Treatment"
![image](https://github.com/user-attachments/assets/b40c0f44-ac93-4bd9-ab15-b91b3fed382b)


### Сторінка "Partners"
![image](https://github.com/user-attachments/assets/1468f29c-aaec-47b3-b90b-8f5d9e33f806)

### Сторінка "About us"
![image](https://github.com/user-attachments/assets/d9e8f49b-e257-404f-b053-67072b897623)

### Сторінка "News"
![image](https://github.com/user-attachments/assets/dd07ab69-58e8-4167-8db4-f7b9202ecb3a)

### Сторінка "Contact"
![image](https://github.com/user-attachments/assets/968b283b-3199-4c9e-8737-ff17b976da8b)


---

## 📄 Ліцензія

Цей проект розповсюджується під ліцензією **MIT**. Ви можете вільно використовувати, модифікувати та розповсюджувати код за умови збереження авторських прав.

# MIT License

**Pavlitoo/lysoclear** is licensed under the **MIT License**.

A short and simple permissive license with conditions only requiring preservation of copyright and license notices. Licensed works, modifications, and larger works may be distributed under different terms and without source code.

## Permissions
- **Commercial use**: The software can be used for commercial purposes.
- **Modification**: The software can be modified.
- **Distribution**: The software can be distributed.
- **Private use**: The software can be used privately.

## Limitations
- **Liability**: The software is provided without warranty, and the author is not liable for any damages.
- **Warranty**: The software is provided "as is," without any warranty.

## Conditions
- **License and copyright notice**: The license and copyright notice must be included in all copies or substantial portions of the software.

---

**Copyright (c) 2024 Pavlo**

Permission is hereby granted, free of charge, to any person obtaining a copy  
of this software and associated documentation files (the "Software"), to deal  
in the Software without restriction, including without limitation the rights  
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell  
copies of the Software, and to permit persons to whom the Software is  
furnished to do so, subject to the following conditions:  

The above copyright notice and this permission notice shall be included in all  
copies or substantial portions of the Software.  

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR  
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,  
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE  
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER  
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,  
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE  
SOFTWARE.  

---

## 📞 Зв'язок

Якщо у вас є питання або пропозиції, зв'яжіться зі мною:
- Email: pasalugovij@gmail.com
- GitHub: [Pavlitoo](https://github.com/Pavlitoo)

---

### QR-код для сайту

Щоб відвідати наш веб-сайт, просто скануйте QR-код нижче:

![image](https://github.com/user-attachments/assets/f39f9b07-f165-4a62-ba38-b303f8c4a45b)


Посилання на сайт: [lysoclear](http://ready-for-feedback3.com/ppfc/luhovyi/)

---

### Дякую за увагу! 😊
