composer install

Créer une base de données sur phpmyadmin, puis
modifier la ligne suivante dans le fichier '.env'

-------------------------------------------------- décommenter et mettre vos infos ici: --------------------------------------------------
DATABASE_URL="mysql://app:!NomD'utilisateur!@127.0.0.1:3306/!NomDeBdd!?serverVersion=8.0.32&charset=utf8mb4"

composer require faker/faker-php

composer require tattali/calendar-bundle

composer require symfony/translation

composer require stripe/stripe-php

Se rendre sur le lien suivant et télécharger la dernère version selon l'OS:

https://github.com/stripe/stripe-cli/releases

windows: https://github.com/stripe/stripe-cli/releases/download/v1.19.4/stripe_1.19.4_windows_x86_64.zip

Décompresser le fichier et mettre 'stripe.exe' en variable d'environement.

symfony console make:migration

symfony console d:m:m

symfony console d:f:l


compte admin:
admin@gmail.com
mdp: admin

compte utilisateur:
bob@gmail.com
mdp: bob
