# PHP Encryption via BLENC


Repo includes test example with sample php files called `"simple.php"` and a Object oriented file class example called as `"class.php"`.
In order to run and test encryption, Run following:

1 - encrypt_class.php

2 - encrypt_simple.php

The encrypted output of files will be produced and stored in `encrypted` folder.

Keys folder is about holding the encrypted keys, key will genertated on the fly by Blenc. This folder is not the part of your project. Therefore, you can use any directory for keys and you must mention about this folder either via `.htaccess` or `php.ini` 
For now, I 
mentioned that relative path of key in my php.ini

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
