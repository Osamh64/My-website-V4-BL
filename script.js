import { createConnection } from 'mysql';

// الاتصال بقاعدة البيانات
const connection = createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'data_awallimna',
});

connection.connect((err) => {
    if (err) {
        console.error('خطأ في الاتصال بقاعدة البيانات:', err);
    } else {
        console.log('تم الاتصال بقاعدة البيانات بنجاح');
    }
});


/* 
التعليمات المهمة:
1- إزالة المسافات من الاسم والبريد الإلكتروني باستخدام trim().  []
2- استعمال loop لتوليد البريد الخاص بالمركز التعليمي.   []
3- تصميم نظام العمر.    []
4- تحديد نوع الحساب وإنشاء id حسب نوع الحساب.   []
5- تحويل تسجيل الدخول و انشاء الحساب من html الى js.    []
6- استعمال loop لتوليد id حسب نوع الحساب.   []
7- استعمال loop لتوليد البريد الخاص بالمعلمين.  []
8-عرض القصص للكاتب عن طريق while.  []
9-مركز تعليمي يعرض فقط قصص الاطفال.     []
10-
*/

// مثال على تنظيف المدخلات (إزالة المسافات)
function sanitizeInputs(username, email, password, confirm_password) {
    return {
        username: username.trim(),
        email: email.trim(),
        password: password.trim(),
        confirm_password: confirm_password.trim(),
    };
}

// توليد بريد خاص بالمركز التعليمي باستخدام loop
function generateEducationalEmails(centerId, count) {
    const emails = [];
    for (let i = 1; i <= count; i++) {
        emails.push(`center_${centerId}_teacher${i}@awallimna.com`);
    }
    return emails;
}

// نظام العمر - التحقق من العمر
function validateAge(birthYear) {
    const currentYear = new Date().getFullYear();
    const age = currentYear - birthYear;

    if (age < 18) {
        console.log(
            'العمر أقل من العمر المسموح لفتح حساب. يجب فتح الحساب عن طريق حساب لشخص آخر.'
        );
        return false;
    } else {
        console.log('تم إنشاء حسابك بنجاح.');
        return true;
    }
}

// توليد ID جديد بناءً على نوع الحساب
function generateUserId(accountType, writerId = 1, centerId = 1, teacherId = 1) {
    switch (accountType) {
        case 'writer':
            return `w_id_${writerId}`;
        case 'reader':
            return `r_id_${writerId}`;
        case 'story':
            return `s_id_${writerId}`;
        case 'center':
            return `c_id_${centerId}`;
        case 'center_teacher':
            return `c_id_${centerId}t_id_${teacherId}`;
        default:
            return 'unknown_id';
    }
}