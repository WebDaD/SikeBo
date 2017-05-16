# Simple Keyword Bot
It's name is SikeBo
You may use this to create a conversational interface.

## Instructions
1. Import SQL into your Database (mysql)
2. Fill answers.csv
3. Import into the table answers
4. Copy Files (api.php, config.php, lib/, demo/) to Webserver
5. Copy config.php.sample to config.php
6. Enter Database Connection Data
7. Point Browser to YOURSERVER/demo/

## Answers.csv
This file is used to write down the answers for the bot in a quick and convenient way.
It consists of 4 Columns:
* Keywords
* Example
* Type
* Answer

### Keywords
Comma-Separated.
E.g. when,next,service

### Example
An Example Sentence to show the user
E.G. "When is the next service?"

### Type
The Type of Answer:
* text = Simple Text (e.g. `Always on Sunday at 10 a.m.`)
* db = Database Query (e.g. `SELECT date FROM service ORDER BY date DESC LIMIT 1`)
* gcal = Google Calendar Query (e.g. `service`)
* gmaps = give back google map (e.g. `@48.1727585,11.2546478,382m`)
* http = Get Info from Website (e.g. `http://feg-ffb.de/ueber-uns/unsere-zielvorstellung/`)
* http-part = Get Part from Website using jquery-syntax (e.g.  `http://feg-ffb.de/ueber-uns/faq/|#accordion-1-c1`)

### Answer
The answer, see Type for examples

## TODO
* demo answers
* database lib
* bot lib
* demo page (bootstrap, jquery, like whatsapp)

## Future Development
* Admin-Interface for Answers
