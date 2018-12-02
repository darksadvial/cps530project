# cps530project
VueJS and Laravel


Requirements (Install):

GitBash

PHP

Node.JS Npm


# Setup Instructions
1. Open GitBash and cd to the folder you wish to have the project located.


2. git clone https://github.com/PNryerson/cps530project.git


3. cd into that folder


4. npm install

	installs all dependencies
    
    takes like 5 minutes


5. npm run watch

	builds server files, keep this window open as it continues to build as you change the code.


6. open another bash window cd into the same folder


7. php artisan serve

    deployds the local server on url: localhost:8000


8. Access with localhost:8000


# Quick Overview of files
EVERYTHING YOU NEED TO CHANGE IS FOUND IN THE RESOURCES FOLDER.

js/components/ = think of it like smaller modules/building blocks to add to the pages.

js/app.js = where you declare/add new components you've created eg. "Vue.component('card-container', require('./components/CardContainer.vue'));"

views/ = the actual webpage files.


TIP

In the webpage phps you can call o'n components using their declaired name as a tag. eg. '<nav-bar></nav-bar> or <card-container></card-container>'


EXTRA
there is also the file routes/web.php which controls which php file gets access via the URL. eg. localhost:8000/page1 = page1.blade.php

routes/api.php is for the api, I have not setup any api's yet, that is done through laravel which I have no idea how to do.
