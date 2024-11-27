<?php 
// إرسال طلب إلى Flask
$ch = curl_init('http://127.0.0.1:8080/get-story-content'); // تعديل عنوان API للحصول على محتوى القصة
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);  // تنفيذ الطلب
curl_close($ch);  // إغلاق الاتصال

// تحويل استجابة JSON إلى مصفوفة في PHP
$storyData = json_decode($response, true);
?><!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عوالمنا</title>
    <link rel="icon" href="Website.jpg">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <h1>
        <div class="location" class="adjust-text">
            <a href="الموقع.html">
                <img src="Website.jpg" alt="صورة الموقع" height="50" width="50">
                <sup style="text-decoration: none;">عوالمنا</sup>
            </a>
        </div>
        <div class="User">
            <a href="تسجيل دخول.html">تسجيل دخول</a> /
            <a href="انشاء حساب.html">انشاء حساب</a>
        </div>
    </h1>
    <div class="category-box">
        <ul>
            <li><a href="الكوميديا.html" class="category-title">كوميديا</a></li>
            <li><a href="الخيال العلمي.html" class="category-title">خيال علمي</a></li>
            <li><a href="الخيال.html" class="category-title">خيال</a></li>
            <li><a href="الرومانسية.html" class="category-title">رومانسي</a></li>
            <li><a href="الجريمة والتحقيق.html" class="category-title">جريمة وتحقيق</a></li>
            <li><a href="الرعب.html" class="category-title">رعب</a></li>
            <li><a href="المغامرة.html" class="category-title">مغامرة</a></li>
            <li><a href="دراما.html" class="category-title">دراما</a></li>
            <li><a href="التاريخية.html" class="category-title">تاريخي</a></li>
            <li><a href="سرقة.html" class="category-title">سرقة</a></li>
            <li><a href="حرب.html" class="category-title">حرب</a></li>
            <li><a href="الفانتازي.html"><div class="category-title">فانتازي</div></a></li>
        </ul>
    </div>
    <!-- <div>
        <button id="text-big">تكبير الخط</button>
        <button id="text-small">تصغير الخط</button>
    </div> -->
    <div>
        <div>
            <!-- عرض اسم القصة ومؤلفها ومحتواها -->
            <p id="story-title" style="text-align: center;"><?php echo $storyData['title'] ?? 'اسم القصة غير متوفر'; ?></p>
            <h3 id="story-author">مؤلف القصة: <?php echo $storyData['author'] ?? 'غير معروف'; ?></h3>
            <br><br>
            <article id="story-content">
                <?php echo $storyData['content'] ?? 'لم يتم العثور على محتوى القصة.'; ?>
            </article>
            <br>
        </div>
    </div>
</body>
</html>
