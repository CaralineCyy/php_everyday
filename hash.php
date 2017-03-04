<?php
/* Create a file to calculate hash of */
file_put_contents('example.txt', 'The quick aa brown fox jumped over the lazy dog  333.');

echo hash_file('md5', 'example.txt');
?> 