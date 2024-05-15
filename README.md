# Projet Docker 4IW
## Enoncé 
Créer une application avec une API Symfony avec 1 endpoint qui récupère des data sur une BDD Postgres et les afficher sur le front. 10 lignes de todo (id, titre, done)
Pour les images custom, toujours partir d'une base alpine
Groupe de 3 maximum (sauf exception)
Notation:
- Qualité de la soutenance (3 points)
- Projet fonctionnel (2 points)
- Symfony custom (3 points)
- Adminer custom (2 points)
- Postgres custom (variables d'environnement fonctionelles) (3 points)
- Composer custom (2 points)
- Question de cours (3 points)
- Le Symfony et la BDD sur des docker-compose différents (2 points)

-- 

Ce projet est une application web basée sur Symfony avec une base de données PostgreSQL gérée avec Docker.

## Prérequis

- Docker
- Docker Compose

## Installation

1. Clonez ce dépôt sur votre machine locale :

```
git clone https://github.com/FAEZ10/PROJET-DOCKER-4IWJ.git
```

2. Accédez au répertoire du projet :

```
cd PROJET-DOCKER-4IWJ
```

## Configuration de la base de données

1. Accédez au répertoire de la base de données :

```
cd Db
```

2. Lancez les conteneurs Docker pour la base de données :

```
docker-compose up --build -d
```

## Configuration de l'application Symfony

1. Accédez au répertoire de l'application Symfony :

```
cd Symfony
```

2. Lancez les conteneurs Docker pour l'application Symfony :

```
docker-compose up --build -d
```

3. Exécutez les migrations Symfony pour créer les tables de la base de données :

```
- docker exec -it symfony-symfony-1 php bin/console make:migration
- docker exec -it symfony-symfony-1 php bin/console doctrine:migrations:migrate
```

## Utilisation

- Accédez à l'application dans votre navigateur web à l'adresse suivante : [http://localhost:80](http://localhost:80)



- Aceeder à la BD via adminer dans votre navigateur web à l'adresse suivante  :
[http://localhost:81](http://localhost:81)

## Contribution

Les contributions sont les bienvenues ! Pour toute suggestion ou rapport de bug, veuillez ouvrir une issue ou une pull request sur GitHub.

---