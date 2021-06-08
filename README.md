# Ukázkový projekt seznam pracovníků

Lumen demo


## Instalace

git clone git@github.com:micdrak/workers-list.git

cd workers-list

composer install

CREATE DATABASE `workers_list` CHARACTER SET utf8 COLLATE utf8_general_ci;
(Potřebujeme vytvořit databázi na mysql serveru ručně, protože spuštění migrace již vyžaduje její existenci)

php artisan migrate
