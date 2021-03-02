# package-composer
-- composer require copadia/php-video-url-parser : librairie pour vidéo et player, on doit créer une extension twig,

## Heroku
- les commandes à taper :
    heroku login : pour la 1er fois

    heroku create (on clique sur l'url fourni)

    Ensuite taper cette commande:  echo web: vendor/bin/heroku-php-apache2 public/ ( 

        création d'un fichier à la racine) servir le dossier public/
    -envoyer la base de données
    https://devcenter.heroku.com/articles/deploying-php 
    # heroku addons:create heroku-postgresql:hobby-dev ( pour postrgresql)
    https://www.veremes.com/installation-postgresql-windows ( installation)
    
    # heroku config:set APP_ENV=prod ( environement production)

    # réecriture des url : du fichier .htaccess

    composer require symfony/apache-pack

    -pusher le projet sur git ( git remote: voir les fichiers ajouté)

    git push heroku master ( reload la page avec l'url fournit)