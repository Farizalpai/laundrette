menggunakan codeigniter 3
menggunakan PHP versi 7.4
buat file .htaccess dan isinya 
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L]
