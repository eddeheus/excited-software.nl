@echo off
setlocal enabledelayedexpansion
set FOUND=0

for /f "tokens=5" %%P in ('netstat -ano ^| findstr ":8000" ^| findstr "LISTENING"') do (
    echo Stop proces %%P dat op poort 8000 luistert...
    taskkill /PID %%P /F
    set FOUND=1
)

if "!FOUND!"=="0" (
    echo Geen proces gevonden op poort 8000.
)

pause
