#Prérequis :
Symfony (V6.2) 
Apache ou Nginx (selon le OS)
MyPHPAdmin (V4.9.7) 
PHP (V8.2)

#Procédure pour installer ll'application Trombinoscope appellé ProjetX.

Dans une console faire :
git clone https://github.com/Malezieux/ProjetX.git

Toujours dans la console entrer dans le dossier du projet avec la commande :
cd ProjetX

Lancer la commande :
symfony composer install

Lancer la commande :
symfony console doctrine:schema:update --force