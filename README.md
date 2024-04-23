composer install

Créer une base de données sur phpmyadmin
Modifier la ligne suivante dans le fichier '.env'

# -------------------------------------------------- décommenter et mettre vos infos ici: --------------------------------------------------
# DATABASE_URL="mysql://app:!NomD'utilisateur!@127.0.0.1:3306/!NomDeBdd!?serverVersion=8.0.32&charset=utf8mb4"

symfony console make:migration

symfony console d:m:m

symfony console d:f:l

composer require faker/faker-php

composer require stripe/stripe-php

composer require tattali/calendar-bundle

composer require symfony/translation

compte admin:
admin@gmail.com
mdp: admin

compte utilisateur:
bob@gmail.com
mdp: bob
