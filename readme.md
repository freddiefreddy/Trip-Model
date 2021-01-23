Getting Started
Trip Model 
Trip model projects collects trips from Json storage and stores them in
MySQL Database. The stored Data is filtered on search depending on the search string 
and the relevant information called Trips is loaded. 
The Trippage holds the number of retrieved trips that match the search string.
The Trips Can be further broken down into individual trip page called Trip Details by filtering using trip id. 

##Prerequisites
1.Clone this repository using:
  $ git clone
2.Setup environment file (.env): 
  $ composer run post-root-package-install or `cp .env.example .env`

3.Migrate & seed database: 
  $ php artisan migrate --seed

4.Run server: 
 $ php artisan serve

5.Insert the Json Data in the Database.
  $ ServerPortAddress/insert-json-file-to-the-database

6. Make Migrations
  $ php artisan makemigrations

## Authors

* **Fredrick Muriungi**