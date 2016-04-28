Modified calendar from Github's Zabuto to the URL : https://github.com/zabuto/calendar
---------------------------------------------------------------------------------------------------
To include the calendar to a website : 

	1. In index.html : Take all the link and script Tags within the head tag
	and put it in your own head tags.

	2. Still in index.html : Take The whole html between <body> and </body> 
	tags and put it wherever you want in your own website.

	3. Put the js folder and the inc folder in the same folder as the html page
 	you want to put the calendar in.

	3. Create a database you can access from your webserver and add a table with 
	the SQL code below : 

		CREATE TABLE `calendar` (
  
		`calendarId` int(11) NOT NULL AUTO_INCREMENT,
  
		`calendarDate` date NOT NULL,
  
		`calendarBadge` tinyint(1) NOT NULL DEFAULT '0',
  
		`calendarClassName` varchar(15) NOT NULL,
  
		PRIMARY KEY (`calendarId`)

		) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

	4. Edit the file inc/dbConnect.php and change the 4 variables with your own
	server adress, database name, login and password.
	
	5. Test the calendar.

	PS : if you don't want an alterable one, just remove the select tag in the
	index.html and the file js/onclickActions.js