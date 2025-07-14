FROM php:8.2-apache

# نسخ ملفات المشروع إلى مجلد الويب
COPY . /var/www/html/

# تفعيل mod_rewrite في Apache
RUN a2enmod rewrite

# إعداد صلاحيات صحيحة
RUN chown -R www-data:www-data /var/www/html/

EXPOSE 80
