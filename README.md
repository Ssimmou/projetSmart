# ProjetSmart PMV DashBoard

A webApp, developed to display basic data on led matrix.

# Running the app

You need a basic Apache server on board, and import the database
included in the database directory.

> login : admin


> Password : root

You can choose between 3 widgets, text, displaying a picture, and a clock.
You should choose a widget for all the four parts to be allowed to continue.
When clicking submit, you are redirected to a new page "page1.php".
This page is the one to be displayed.
Run it in full screen, on your favorite browser.
** Do not forget to run the RPI program to force video output to the LED matrix**

> [link for the rpi project to setup your led matrix](https://learn.adafruit.com/raspberry-pi-led-matrix-display)

# Output

Visit the link.
[output of the page1.php](https://drive.google.com/file/d/1g4kXVJ0jfOmAHYTd9w-g7diP62SpCNmV/view?usp=sharing)

# Difficulties

The solution is not suited for the problem, the horsePower needed is huge for what can the rpi
produce.
A future solution is to use a raw frame buffer generated by the webpage and sent directly to the led matrix.
