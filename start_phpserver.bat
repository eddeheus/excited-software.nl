@echo off
cd /d "%~dp0"
start "PHP dev server" cmd /k php -S localhost:8000 index.php
timeout /t 1 /nobreak >nul
start "" "http://localhost:8000/"
