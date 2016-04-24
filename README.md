.htaccess
```
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php [QSA,L]
```

### Example
URL : 
```
/chat?message=hai
```
Output :
```json
{"success":1,"message":"hai juga"}
```
