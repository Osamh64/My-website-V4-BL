# استخدام صورة Python الرسمية
FROM python:3.12-slim

# إعداد مجلد العمل
WORKDIR /app

# نسخ الملفات إلى الحاوية
COPY . /app

# تثبيت المتطلبات
RUN pip install -r requirements.txt

# تعيين المدخل الافتراضي
CMD ["gunicorn", "-w", "4", "-b", "127.0.0.1:9000", "apis:app"]
