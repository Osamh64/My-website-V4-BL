<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device_width, initial_scale=1.0">
    <title>عوالمنا</title>
    <link rel="icon" href="Website.jpg">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <header>
        <div class="location" style="text-align: center;">
            <a href="الموقع.html" style="text-decoration: none; color: inherit;">
                <img src="Website.jpg" alt="صورة الموقع" height="50" width="50">
                <h1 style="display: inline; margin: 0;">عوالمنا</h1>
            </a>
        </div>
        <div class="header-right">
            <a href="تسجيل دخول.html">تسجيل دخول</a>
            <a href="انشاء حساب.html">انشاء حساب</a>
        </div>
    </header>
    <main>
    <div class="search">
            <form method="GET">
                البحث عن قصة: <input type="text" name="q" id="searchInput">
                <input type="submit" value="ابحث" onclick="search(); return false;">
            </form>
        </div>
        <div class="category-box">
            <ul>
                <li><a href="الكوميديا.html" class="category_title">كوميديا</a></li>
                <li><a href="الخيال العلمي.html" class="category_title">خيال علمي</a></li>
                <li><a href="الخيال.html" class="category_title">خيال</a></li>
                <li><a href="الرومانسية.html" class="category_title">الرومانسي</a></li>
                <li><a href="الجريمة والتحقيق.html" class="category_title">جريمة وتحقيق</a></li>
                <li><a href="الرعب.html" class="category_title">الرعب</a></li>
                <li><a href="المغامرة.html" class="category_title">مغامرة</a></li>
                <li><a href="دراما.html" class="category_title">دراما</a></li>
                <li><a href="التاريخية.html" class="category_title">تاريخي</a></li>
                <li><a href="سرقة.html" class="category_title">سرقة</a></li>
                <li><a href="حرب.html" class="category_title">حرب</a></li>
                <li><a href="الفانتازي.html"class="category_title">فانتازي</a></li>
                <li><a href="اطفال.html"class="category_title">اطفال</a></li>
            </ul>
        </div>
        <h2 class="new_story">أحدث القصص</h2>
    </main>
    <footer>
        جميع الحقوق محفوظة &copy; 2024
    </footer>
</body>
</html>
