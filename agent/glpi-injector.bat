@echo off
for %%p in (".") do pushd "%%~fsp"
cd /d "%~dp0"
set _OLDPATH=%PATH%
set PATH=%~dp0perl\bin;%PATH%

perl\bin\glpi-agent.exe perl\bin\glpi-injector %*

set PATH=%_OLDPATH%
set _OLDPATH=
popd
