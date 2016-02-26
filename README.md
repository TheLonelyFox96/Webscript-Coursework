# Webscript-Coursework
Home of my Webscript Coursework

--------------------------------
First Change:

Create FTP Config file to allow saves straight to the server as well as the Git file to save time and effort.

--------------------------------
Downloading code from Github.

The first step to being able to run FSN from your own server is to download this file from GitHub.

You can do this one of two ways:

--> Firstly you can create a git clone of the code assuming you have downloaded git desktop or are using GIT.
   --> First you will need the link address for the repo - which can be copied to your clipboard by pressing the little clipboard icon located next to the Download ZIP button.
   --> When on GitHub Desktop - click the small plus icon and navigate to the clone tab.
   --> Click on the repo you saved to your clipboard and from the options menu find a local file to store the code within.

--> Secondly you can just straight 'Download ZIP File'.
   --> Once you click download zip the file will save to your local downloads file.
   --> From there extract the files from the ZIP and relocate them to your preferred destination.

Both options are found at the top of the repo

Connecting to a Database.

To connect to a database you need to go into the following files; Home.php, login.php, index.php and userRegister.php.

Once inside them you need to change the '$myIP' to your machines local IP or the server IP you wish to run this website on.

Take similar steps for db user and password if different to 'root'.

--------------------------------

Creating the Database. - UPDATE NEXT SECTION!

Assuming this is the first time you have used the website then it is likely the database required hasnt been created yet.

Upon running 'index.php' you should be presented with a nice home screen with the option to sign in or login. If this page has run then the database should have been created on your server.

Check that this is correct and the Database 'Web' exists, and within 'Web' is a table called 'User'.

If this isn't the case then please check the code to make sure you have entered the right IP/user/password for your server.

If the above steps are a success you are now ready to register and use the site!! :D

Database Plans.

Have a SINGLE file that connects to the database and is require/used by the other pages to save having to change and enter details on every page.

--------------------------------

DATABASE UPDATE.

To connect to your database all that is now required is to navigate to PHP/dbConnect.php file and edit the credentials to your server IP, user and password.

All files that require this connection have now been setup to just use this file instead of having to change credentials in each individual one.

-------------------------------

To use the API.

The API is provided from an external company (http://football-api.com/documentation/).

To get the APIs working on my website it is required to change the IP in my 'Accounts' page to that of your local IP or server IP (again whichever you run the site via).

To do this please contact me (up737725) so I can set it or give you the details to be able to login.

-------------------------------

Website is runnable on Mobile and Tablet too!

To try out the site on your Mobile or Tablet device, then go to your web browser and enter the address as it is shown on your PC or laptops web browser.

PLEASE NOTE: if you are running on localhost then you will need to find and enter the localhost IP when using the site on Mobile as it will not be the same localhost IP.

To do this simple go to google and search 'my ip'.

-------------------------------

Thank you for becoming a member of FSN and I hope it is a great experience for you!
