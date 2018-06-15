## Sample Laravel DB Translations & Breadcrumps application

###### This application is an example of implementation and using following techniques and services

> - Using DB as translation storage by using `laravel-translation-loader` package


#### Installation

1. Install this code on your local system
     
    1. Fork this repository (click 'Fork' button in top right corner)
    2. Clone the forked repository on your local file system
    
        ```
        cd /path/to/install/location
        
        git clone https://github.com/Maksim1990/Laravel_DB_Translations_and_Breadcrumps.git
        ```

2. Change directory into the local clone of the repository

    ```
    cd Laravel_DB_Translations_and_Breadcrumps
    ```

3. Install [NPM](https://getcomposer.org) & [Composer](https://getcomposer.org) dependencies

    ```
    npm install
    
    composer install
    ```

4. Create a `.env` file by copying the sample

    ```
    cp .env.example .env
    ```
    
    Or for Windows:
    
    ```
    copy .env.example .env
    ```
    
5. Run migrations

    ```
    php artisan migrate
    ```

6. Start project running

    ```
    php artisan serve
    ```


