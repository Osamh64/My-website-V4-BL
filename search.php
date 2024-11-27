<?php
// معلومات الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root"; // اسم المستخدم الافتراضي لـ XAMPP
$password = ""; // كلمة المرور الافتراضية لـ XAMPP
$dbname = "data_awallimna";

// إنشاء اتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// استعلام لاسترجاع البيانات من الجدول
$sql = "SELECT id, type, creation_date, admin_id, description FROM items";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عوالمنا - التصفح العالي</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
            direction: rtl;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            text-align: right;
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e8e8e8;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>جدول البيانات</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>النوع</th>
                <th>تاريخ الإنشاء</th>
                <th>ID المسؤول</th>
                <th>وصف</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                // عرض البيانات لكل صف
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["type"]. "</td><td>" . $row["creation_date"]. "</td><td>" . $row["admin_id"]. "</td><td>" . $row["description"]. "</td></tr>";
                }
            } else {
                echo "<tr><td colspan='5'>لا توجد نتائج</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php
// إغلاق الاتصال بقاعدة البيانات
$conn->close();
?>
</body>
</html>