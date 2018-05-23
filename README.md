#InventoryKeeper
InventoryKeeper is a project that aims at providing a great chance for institutions to manage their assets

## Development

### System Requirements
An environment that implements a LEMP stack is recommended for system development and testing.
The minimum system requirements are `Nginx v1.14`, `MySQL v5.7` and `PHP v7.2` with Ubuntu Linux (v18.04 LTS) as the operating system. 

Your environment should also have the following additional software installed; `git v2.17.0` or greater, `npm v5.6.0` or greater, `composer v1.6.2` or greater. 

A changelog is used for versioning the regular changes made to the project.
The format used is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

### Setting up on Localhost
For first time set up, open a terminal and change the prompt to the directory where you intend to store the project for development purposes.
Follow the steps given below;
* `git clone https://github.com/abdy254/project`
* `cd project.test`
* `git fetch --all`
* `git checkout develop`
* `composer install`
* `npm install`
* `npm run dev`
* `cp .env.localhost .env`
* `php artisan migrate:fresh --seed`


You may now open the project in your IDE or Text Editor of choice to start coding. For live reloading your changes in a browser while coding, use the following command; `npm run watch`.
By default the project will automatically open in a new browser window or tab with the url `http://localhost:3000`. The port may vary depending on the environment and port configuration. 
