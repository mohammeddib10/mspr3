"# MSPR 3 Preudhomme" 

installer les dépendances 

    composer install 

Installing Panther
Use Composer to install Panther in your project. You may want to use the --dev flag if you want to use Panther for testing only and not for web scraping in a production environment:

    composer req symfony/panther

    composer req --dev symfony/panther

Lancez les tests pour vérifier qu’ils passent :

    symfony php bin/phpunit



