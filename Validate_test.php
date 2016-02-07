<?php
require 'ValidateCode.php';
$validate=new ValidateCode(60,20,5);
$validate->showImage();

