<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إنشاء حساب مركز تعليمي - عوالمنا</title>
    <link rel="icon" href="Website.jpg">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <script src="center_country.js"></script>
</head>
<body>
    <div class="container">
        <header>
            <a href="الموقع.html" class="logo-link">
                <img src="Website.jpg" alt="صورة الموقع" height="50" width="50">
                عوالمنا
            </a>
        </header>
        <main>
            <div class="registration-container" role="main">
                <h2>إنشاء حساب لمركز تعليمي</h2>
                <form onsubmit="handleSubmit(event)">
                    <div class="form-group">
                        <label for="email">البريد الإلكتروني</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">كلمة السر</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button type="submit">تسجيل الدخول</button>
                </form>
            </div>
        </main> 
    </div>
</body>
</html>

    <!--  رابط مع قاعدة البيانات الي اسمه قاعدة البيانات.sql  -->
    <header>
        <div class="location" style="text-align: center;">
            <a href="الموقع.html" style="text-decoration: none; color: inherit;">
                <img src="Website.jpg" alt="صورة الموقع" height="50" width="50">
                <h1 style="display: inline; margin: 0;">عوالمنا</h1>
            </a>
        </div>
    </header>
    <br><br><br>
        <div style="text-align: center;" class="notification-box">
        <p>تم الارسال ارجو الانتظار الرد من الاداره</p>
        <p>شكرا لكم لاستخدام موقعنا</p>
    </div>
    <footer>
        <p>&copy; 2024 عوالمنا. جميع الحقوق محفوظة.</p>
    </footer>
</body>
</html>
            </a>
            <h1>طلب حساب مركز تعليمي</h1>
        </header>

        <main id="centerRegistrationForm" class="registration-container">
            <form id="center_Registration_Form" action="register_center.html" method="POST">
                <div class="form-group">
                    <label for="owner_name">اسم المالك:</label>
                    <input type="text" id="owner_name" name="owner_name" required>
                </div>
                <div id="center_name" class="form-group">
                    <label for="center_name">اسم المركز:</label>
                    <input type="text" id="center_name" name="center_name" required>
                </div>
                <div id="email" class="form-group">
                    <label for="email">البريد الإلكتروني:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div id="password" class="form-group">
                    <label for="password">كلمة المرور:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div id="confirm_password" class="form-group">
                    <label for="confirm_password">تأكيد كلمة المرور:</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                </div>

                <div id="center_address" class="form-group">
                    <label for="center_address">عنوان المركز:</label>
                    <input type="text" id="center_address" name="center_address" required>
                </div>
                <div id="employee_accounts" class="form-group">
                    <label for="employee_accounts">عدد حسابات المعلمين:</label>
                    <input type="number" id="employee_accounts" name="employee_accounts" required min="1">
                </div>
                <div id="email_type" class="form-group">
                    <label for="email_type">اختر نوع البريد الإلكتروني:</label>
                    <select id="email_type" name="email_type" required>
                        <option value="خاص">خاص</option>
                        <option value="مخصص">مخصص</option>
                    </select>
                </div>
                <button type="button" id="submitBtn">إنشاء حساب مركز تعليمي</button>

                <script>
                    document.getElementById('submitBtn').addEventListener('click', function () {
                        // إرسال النموذج باستخدام JavaScript (يمكن تخصيص هذا الجزء)
                        document.getElementById('center_Registration_Form').submit();
                
                        // إعادة التوجيه إلى الصفحة المطلوبة
                        window.location.href = "تم الارسال مركز تعليمي.html";
                    });
                </script>

            </form>
        </main>

        <footer>
            <p>جميع الحقوق محفوظة &copy; 2023</p>
        </footer>
    </div>
</body>
</html>