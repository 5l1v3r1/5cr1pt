@ECHO OFF
title WMIC LIST BY k4mpr3t
color A
CLS
ECHO.
ECHO  ::::::::::::::::::: WMIC LIST BY k4mpr3t ::::::::::::::::::::
ECHO  :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
ECHO  :::: USAGE: [ALIAS] [OPTION: BRIEF/FULL/INSTANCE/SYSTEM] ::::
ECHO  :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
ECHO.
ECHO ALIAS: %1 
ECHO OPTION: %2
ECHO.



IF %1 (

	wmic /output:%1.html %1 LIST %2 /format:hform
	IF NOT findstr == "Alias not found" (
		START "%title%" "%CD%.\%1.html"
	)
	
) ELSE (
	
	wmic alias list instance
)
