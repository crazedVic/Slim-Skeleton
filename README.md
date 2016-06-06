# Slim Framework 3 Super Basic Application Skeleton

Use this skeleton application to quickly setup and start working on a new Slim Framework 3 application.  I'm using this on http://nitrous.io specifically and have modified the files so this all works right away.  I've removed the php-view and the monolog stuff as I can add that later and I actually prefer TWIG.  Also had to lower min version requirement of Slim to 3.0 so slim/twig-view would install.

This skeleton application was built for Composer. This makes setting up a new Slim Framework application quick and easy.

## Install the Application

Run this command from the directory in which you want to install your new Slim Framework application.

    php composer.phar create-project crazedvic/slim-skeleton [my-app-name]

Replace `[my-app-name]` with the desired directory name for your new application. You'll want to:

* Point your virtual host document root to your new application's `public/` directory.

Then cd to the `[my-app-name]` folder and type in:

    php -S 0.0.0.0:8080 -t public public/index.php

Now you can go visit the default site if it's running on your own machine at http://localhost:8080 or if you are using NITROUS.IO click Preview in the Menu and select Port 8080.

That's it! Now go build something cool.
