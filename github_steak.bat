@echo off
cd /d E:\github\php_everyday
for /l %%a in (3,3,12) do (
    for /l %%b in (1,1,31) do (
        echo 2016-%%a-%%b 11:11:11 >>E:\github\php_everyday\1.txt
        git add .
        git commit -m "ok" --date "2015-%%a-%%b 11:11:11"
    )
)