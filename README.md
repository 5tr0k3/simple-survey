# Simple-Survey
Simple survey php site to help students to conduct some psychological analysis survey where the participant is shown a number of images, and then presented with some other images and their response is analysed based on what they selected associating what kind of images with who or what colour/race.
## Index
This page only layout the rules.

## Participant
This page asks the participant to put an identifier for them in a box and submit it through a form.

On this page, a random session id is generated the value will be from 1,000,000 to 9,999,999. They will both be submitted to the next page (display.php)

## Display
This page display's the image of an individual.

The page will submit the participant name and the unique session id to the database. Then through a form, it will generate a display time and display linux time and post it to the next page (choice.php)

## Choice
This page will ask the participant to select an item. The idea is that it will psychologically be associated with the individual presented to them earlier.

In this page, the display times will be submitted to the database.

## Results
This page will submit the choice image name, time stamps to the database and will retrieve the data submitted and present it.

## Include
The folder contains two files:

### Connection
This file will establish a connection to the database.
### Constants
This file contains the database url, database name, and database password. 
