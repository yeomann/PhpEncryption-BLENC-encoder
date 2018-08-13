# PHP Encryption-BLENC-encoder
Php code encyption via BLENC

Code includes test example with simple php file called `"simple.php"` and a Object oriented file as example called `"class.php"`.
In order to run and test encryption, Run following:

1 - encrypt_class.php
2 - encrypt_simple.php

The encrypted output will be produced and stored in `encrypted` folder.

Keys folder is about holding the encrypted keys, that will genertated on the fly by Blenc. This folder is not the part of your project there you can user any directory and you must mention about this folder either via `.htaccess` or `php.ini` 
for now i mentioned that relative path of key in my php.ini

## Php.ini

```
extension=php_blenc.dll
blenc.key_file = "C:/xampp/htdocs/test/keys/blenc.key_file"
```

you can get the DLL from the blenc repo mentioned below. 

*Note* Regarding DLL choose according to your installed PHP not system 32/64 bit and also choose safe thead. 

more about lib here http://php.net/manual/en/book.blenc.php

# Usefull articles and links

https://stackoverflow.com/questions/9046675/convert-a-php-script-into-a-stand-alone-windows-executable
https://github.com/cztomczak/phpdesktop/wiki/Source-code-protection#bcompiler
https://github.com/codex-corp/ncryptd/blob/master/app/controllers/MagicalController.php#L479
https://stackoverflow.com/questions/15518125/cant-install-bcompiler-pecl-extension
