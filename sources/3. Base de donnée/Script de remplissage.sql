#------------------------------------------------------------
#        Script de remplissage MySQL
#------------------------------------------------------------

# Création des utilisateurs :
INSERT INTO users
VALUES
	(0, "Matthieu", "Carteron", "Rubisetcie", "Nanterre", STR_TO_DATE("20-03-1998", "%d-%m-%Y"), "matthieu.carteron@viacesi.fr", "ba130c9287472791944b4d5059b86052", "matthieu.jpg", 1),
	(1, "Killian", "Deroche", "Kiki", "Nanterre", STR_TO_DATE("06-05-1999", "%d-%m-%Y"), "killian.deroche@viacesi.fr", "ad2b059d385f56037fda927bd6762d43", "killian.jpg", 1),
	(2, "Salim", "Zemri", "Salim", "Nanterre", STR_TO_DATE("09-08-1999", "%d-%m-%Y"), "salim.zemri@viacesi.fr", "143c5e946d502265ec529c40114ad27c", "salim.jpg", 2),
	(3, "Mohamed", "Oumid", "Momo", "Nanterre", STR_TO_DATE("09-07-1998", "%d-%m-%Y"), "mohamed.oumid@viacesi.fr", "7682fe272099ea26efe39c890b33675b", "mohamed.jpg", 1),
	(4, "Charafein", "Mohamed", "Stan", "Nanterre", STR_TO_DATE("25-11-1999", "%d-%m-%Y"), "charafein.mohamed@viacesi.fr", "d3a8fd6da30995017b9007c91525a4cd", "charafein.jpg", 0);

# Créations des manifestations publiées par les membres du BDE :
INSERT INTO manifestations
VALUES
	(0, "Voile cet été", "Le CESI Voile organise une séance de voile dans les plages du sud de la France.", "cvoile_ev0001.jpg", STR_TO_DATE("16-08-2018", "%d-%m-%Y"), STR_TO_DATE("22-08-2018", "%d-%m-%Y"), 0, 12.00, 0, 1, 1),
	(1, "Tournoi de football à la fin de l'année", "Le CESI Football organise, pour cloturer cette année d'étude, un grand tournoi de football.", "cfoot_ev0001.jpg", STR_TO_DATE("01-07-2018", "%d-%m-%Y"), STR_TO_DATE("06-07-2018", "%d-%m-%Y"), 1, 6.0, 0, 1, 3),
	(2, "Séance du dernier film de Roman Polanski", "Le CESI Cinema projette le film \"J'accuse\" de Roman Polanski cette semaine.", "ccine_ev0001.jpg", STR_TO_DATE("31-01-2019", "%d-%m-%Y"), NULL, 0, 0.00, 0, 1, 0);

# Créations des photos publiées par les étudiants :
INSERT INTO pictures
VALUES
	(0, "Selfie sur voile", "userp_0000000001.jpg", STR_TO_DATE("20-09-2018", "%d-%m-%Y"), 0, 1, 4, 0),
	(1, "Equipe de voile", "userp_0000000002.jpg", STR_TO_DATE("21-09-2018", "%d-%m-%Y"), 0, 1, 1, 0),
	(2, "Mon exploit", "userp_0000000003.jpg", STR_TO_DATE("04-01-2019", "%d-%m-%Y"), 0, 1, 3, 0),
	(3, "Victoire de l'équipe rouge", "userp_0000000004.jpg", STR_TO_DATE("02-08-2018", "%d-%m-%Y"), 0, 1, 0, 1),
	(4, "Moment fort", "userp_0000000005.jpg", STR_TO_DATE("01-08-2018", "%d-%m-%Y"), 0, 1, 3, 1);

# Créations des commentaires sous les photos :
INSERT INTO comments
VALUES
	(0, "Bravo !", STR_TO_DATE("21-09-2018", "%d-%m-%Y"), 1, 3, 0),
	(1, "Très joli.", STR_TO_DATE("20-09-2018", "%d-%m-%Y"), 1, 2, 0),
	(2, "Vous avez l'air ridicule. :)", STR_TO_DATE("21-09-2018", "%d-%m-%Y"), 1, 2, 1),
	(3, "Abonnez-vous à ma chaîne je rend. :p", STR_TO_DATE("25-09-2018", "%d-%m-%Y"), 1, 0, 1),
	(4, "Superbe !", STR_TO_DATE("05-01-2019", "%d-%m-%Y"), 1, 0, 2),
	(5, "C'est quoi un exploit ?", STR_TO_DATE("10-08-2018", "%d-%m-%Y"), 1, 4, 3),
	(6, "Truc de fou !", STR_TO_DATE("01-09-2018", "%d-%m-%Y"), 1, 1, 3),
	(7, "Trop fort !", STR_TO_DATE("08-08-2018", "%d-%m-%Y"), 1, 3, 4);

# Créations de la liste de toutes les activités :
INSERT INTO activities
VALUES
	("Voile", "Rejoignez-nous à la plage pour faire de la voile entre futur ingénieurs !", "club_voile.jpg"),
	("Gaming", "Participez à des compétitions de jeux-vidéos en ligne avec les étudiants !", "club_gaming.jpg"),
	("Cinéma", "Développez votre culture du septième art et votre esprit critique en compagnie de futurs ingénieurs !", "club_cinema.jpg"),
	("Musique", "Organisez des concerts rythmés et devenez un virtuose parmis vos pairs futurs ingénieurs !", "club_musique.jpg"),
	("OEnologie", "Retrouvez-nous dans des sorties entre futurs ingénieurs afin de complaire votre culture cullinaire !", "club_oenologie.jpg"),
	("Basketball", "Intégrez une de nos équipe de basketball et développez votre esprit d'équipe !", "club_basketball.jpg"),
	("Football", "Rejoignez l'une de nos équipe de football et participez à des compétitions !", "club_football.jpg"),
	("Workout", "Développez votre physique à la salle de sport entre étudiants ingénieurs !", "club_workout.jpg"),
	("Soirée", "Participez à des soirées en compagnie du BDE !", "club_soiree.jpg");

# Création de la boîte à idées :
INSERT INTO ideas
VALUES
	(0, "Club de handball", "Pareil que le club de foot, mais avec du handball.", NULL, 1),
	(1, "Club d'échecs", "Pour jouer aux échecs et faire des compétitions entre passionnés.", "idea_00000000001.jpg", 0),
	(2, "Club de Jeu de rôle papier", "Pour les passionnées de Jeux de rôle papier.", "idea_00000000002.jpg", 3),
	(3, "Club \"ensemble vide\"", "Un club dans lequel on ne fait rien et on peut rentrer chez soi le jeudi après-midi.", "idea_00000000003.jpg", 1);

# Création de la table reliant les manifestations et les utilisateurs inscrits :
INSERT INTO register
VALUES
	(0, 1),
	(0, 2),
	(1, 0),
	(1, 2),
	(3, 0),
	(3, 1),
	(4, 0);

# Création de la table reliant les activités pratiquées et les utilisateurs :
INSERT INTO practise
VALUES
	("Cinéma", 0),
	("Cinéma", 1),
	("Gaming", 0),
	("Gaming", 3),
	("Voile", 1),
	("Voile", 3),
	("Voile", 4),
	("Football", 0),
	("Football", 3);

# Création des produits de la boutique :
INSERT INTO products
VALUES
	(0, "Mug CESI", "Un superbe mug réalisé au Fab-lab du CESI.", "product_mug.jpg", "Mug", 8.90, 520),
	(1, "Stylo CESI", "Un stylo marqué du logo CESI.", "product_pen.jpg", "Ecriture", 1.00, 4007),
	(2, "Décapsuleur CESI", "Un décapsuleur utile aux activités du BDE.", "product_decap.jpg", "Outil pratique", 2.25, 106),
	(3, "T-Shirt CESI", "Un T-Shirt marqué du logo CESI.", "product_tshirt.jpg", "Vêtement", 10.99, 1549),
	(4, "Veste CESI", "Une veste marquée du logo CESI.", "product_vest.jpg", "Vêtement", 11.99, 849),
	(5, "Sweat shirt CESI", "Un Sweat shirt marqué du logo CESI.", "product_sweat.jpg", "Vêtement", 13.99, 1101),
	(6, "Pull over CESI", "Un Pull over marqué du logo CESI.", "product_pull.jpg", "Vêtement", 12.80, 1209),
	(7, "Casquette CESI", "Une casquette marquée du logo CESI.", "product_cap.jpg", "Vêtement", 4.90, 1205);
