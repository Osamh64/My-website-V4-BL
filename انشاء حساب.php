<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>إنشاء حساب شخصي - عوالمنا</title>
    <link rel="icon" href="Website.jpg">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <script src="center_country.js"></script>
    <meta name="description" content="اكتشف عوالمًا لا حدود لها من الخيال والإبداع على موقعنا، حيث يلتقي الكتّاب والقرّاء ليشاركوا قصصهم ورواياتهم في مساحة آمنة وملهمة.">
    <meta name="keywords" content="قصص, روايات, قصص عالمية, روايات عالمية, كتب, أدب, كتّاب, قرّاء, إبداع, خيال, مغامرة, غموض, علمي, حب, مسابقات كتابية, منصة كتابية, تبادل القصص, تحديات كتابية, منصة روايات, كتابة, كتابة قصص, كتابة روايات, تأليف, مشاركة قصص, مشاركة روايات, موقع أدبي, موقع قصص, موقع روايات, منصة أدبية, منصة قصص, منصة روايات, مجتمع أدبي, مجتمع كتابي, مجتمع قراءة, تفاعل أدبي, تفاعل كتابي, تفاعل قراءة, إلهام كتابي, إلهام قصص, إلهام روايات, تنمية مهارات كتابية, تنمية مهارات قصصية, تنمية مهارات روائية">
</head>
<body>
    <div class="header-left">
        <a href="index.html" class="logo-link">
            <img src="Website.jpg" alt="شعار عوالمنا" height="50" width="50">
            عوالمنا
        </a>
    </div>

    <div class="registration-container" role="main">
        <form id="registrationForm" action="register.html" method="POST" onsubmit="return validateForm()">
            <div class="error-messages"></div>
            <div class="success-message"></div>

            <div id="username" class="username">
                <label for="username">اسم المستخدم:</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div id="account_name" class="account_name">
                <label for="account_name">الاسم الظاهر:</label>
                <input type="text" id="account_name" name="account_name" required>
            </div>

            <div id="email" class="email">
                <label for="email">البريد الإلكتروني:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div id="password" class="password">
                <label for="password">كلمة المرور:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div id="confirm_password" class="confirm_password">
                <label for="confirm_password">تأكيد كلمة المرور:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>

            <div id="birth_date" class="birth_date">
                <label for="birth_date">تاريخ الميلاد:</label>
                <input type="date" id="birth_date" name="birth_date" required>
            </div>

            <div id="gender" class="gender">
                <label for="gender">الجنس:</label>
                <select id="gender" name="gender" required>
                    <option value="">اختر الجنس</option>
                    <option value="male">ذكر</option>
                    <option value="female">أنثى</option>
                </select>
            </div>

            <div id="account_type" class="account_type">
                <label for="account_type">نوع الحساب:</label>
                <select id="account_type" name="account_type" required>
                    <option value="">اختر نوع الحساب</option>
                    <option value="writer">كاتب</option>
                    <option value="reader">قارئ</option>
                </select>
            </div>

            <div id="center_country" class="center_country">
                <label for="center_country">البلد:</label>
                <select id="center_country" name="center_country" required>
                    <option value="">اختر البلد</option>
                </select>
            </div>

            <div class="">
                <button type="submit">تسجيل الحساب</button>
            </div>
        </form>
    </div>
</body>
</html>
