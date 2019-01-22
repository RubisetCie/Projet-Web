#------------------------------------------------------------
#        Script de remplissage MySQL
#------------------------------------------------------------

# Création des utilisateurs :
INSERT INTO users

# Créations des manifestations publiées par les membres du BDE :
INSERT INTO manifestations

# Créations des photos publiées par les étudiants :
INSERT INTO pictures

# Créations des commentaires sous les photos :
INSERT INTO comments

# Créations de la liste de toutes les activités :
INSERT INTO activites
VALUES
	("Voile", "Rejoignez-nous à la plage pour faire de la voile entre futur ingénieurs !", "club_voile.jpg"),
	("Gaming", "Participez à des compétitions de jeux-vidéos en ligne avec les étudiants !", "club_gaming.jpg"),
	("Cinema", "Développez votre culture du septième art et votre esprit critique en compagnie de futurs ingénieurs !", "club_cinema.jpg"),
	("Musique", "Organisez des concerts rythmés et devenez un virtuose parmis vos pairs futurs ingénieurs !", ""),
	("Œnologie", "Retrouvez-nous dans des sorties entre futurs ingénieurs afin de complaire votre culture cullinaire !", "club_oenologie.jpg"),
	("Basketball", "Intégrez une de nos équipe de basketball et développez votre esprit d'équipe !", "club_basketball.jpg"),
	("Football", "Rejoignez l'une de nos équipe de football et participez à des compétitions !", ""),
	("Workout", "Développez votre physique à la salle de sport entre étudiants ingénieurs !", ""),
	("Soirée", "Participez à des soirées en compagnie du BDE !", "");

# Création de la boîte à idées :
INSERT INTO ideas

# Création de la table reliant les manifestations et les utilisateurs inscrits :
INSERT INTO register

# Création de la table reliant les activités pratiquées et les utilisateurs :
INSERT INTO practise

# Création des produits de la boutique :
INSERT INTO products

