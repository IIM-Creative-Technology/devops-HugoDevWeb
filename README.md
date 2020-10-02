# devops-HugoDevWeb
devops-HugoDevWeb created by GitHub Classroom


Cette simple application à uniquement pour but de nous exercer sur le déploiement d'application php (symfony ici) ainsi qu'avec une base données (mysql)

Comme demandé, il y a 2 deploiements dsitincts, un pour la prod et un pour la preprod

### Configuration
- Creation d'un fichier Procfile qui permet de lier le ficher entré dans le Procfile au HTTP Routing de heroku
- Config Deploiement: 
  - Ce fichier s'executera lorsque certaines conditions (que nous choisissons), sont réalisées.
    - Dans notre cas notre ficher s'executera lorsqu'un push ou un pull_request sera executé sur la/les branche.s selectionnée.s
  
  - La partie jobs est essentiel pour le deploiement de notre application.
    - Grace au runs on, on peut choisir sur quel environnement notre app sera deployée
  
  - il faut ensuite définir les étapes qui seront effectuées lors des push et PR
    - actions/checkout@v2 = permet au workflow d'accéder à notre repository
    - michaelw90/PHP-Lint@master = phplint est un outil qui peut accélérer le linting (propreté d'ecriture, indentations) des fichiers php en exécutant plusieurs processus lint à la fois.
    - symfonycorp/security-checker-action@v2 = Permet de vérifier que nos dépendances n'ont pas de faille de sécurité
    - docker://oskarstark/phpstan-ga = PHP stan va vérifier la validité de votre code, que ce soit sur a syntax comme sur la fonctionnalité
    - php-actions/phpunit@v9 = Permet de lancer des tests unitaires afin de s'assurer du bon developpement de l'application
    - akhileshns/heroku-deploy@v3.5.6 = permet de déployer sur heroku 
    
  - Il y a enfin les variables d'environnement :
    - Api ley, qui va nous permettre de nous identifier et sécuriser notre plateforme
    - app, qui sera le nom du project créé sur heroku
    - email, qui sera le mail utilisé sur notre compte heroku
    
    
    
### Liens vers les sites
  - preprod : https://deploy-db-preprod.herokuapp.com/
  - prod : https://deploy-db-prod.herokuapp.com/
