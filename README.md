HMVC architecture integration with codeIgniter
=============

Tutorial on HMVC (Hierarchical Model View Controller) architecture for CI (CodeIgniter) framework


Changes made in the CI framework:

1. Copied MX folder to application/third_party


2. Copied MY_Loader.php and MY_Router.php to application/core


3. Modules folder created under the application folder along with models,views and controllers folder in the new module named band.

4. Route information added in appliction/config/routes.php

5. Created .htaccess file. 

(Note if your project is under some folder in the server then change the RewriteBase of htaccess file to the same name of the folder.
Currently it is RewriteBase /hmvctutorials. If the project is directly under the document root of the server then make it /
)



Following step is optional for the HMVC. It doesn't have dependency on template.

Template Integration
=============

We can use the existing CI template or use the template library (http://williamsconcepts.com/ci/codeigniter/libraries/template/)


1. Copied Template.php to applicaiton/library folder

2. Copied template.php to application/config folder (Note: This is the file where you define the regions for the template)

3. Loaded the template library in application/config/autoload.php 


Furthermore I have configured base_url in application/config/config.php, created assets folder for theme management and added layout and includes folder in the views folder.


That's all. 
You can just download or clone the project and put it under your server and run in the browser.


Author
==================

Sanjeev Subedi

http://sanzeev.com.np


