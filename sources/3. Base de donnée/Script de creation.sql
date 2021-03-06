#------------------------------------------------------------
#        Script de création MySQL
#------------------------------------------------------------

# Table des utilisateurs :
CREATE TABLE users
(
    user_id						INT(7) NOT NULL AUTO_INCREMENT,
	user_firstname				VARCHAR(25) NOT NULL,
    user_lastname   			VARCHAR(25) NOT NULL,
    user_nickname  				VARCHAR(25),
    user_location   			VARCHAR(40) NOT NULL,
    user_birthday   			DATE,
    user_email      			VARCHAR(35) NOT NULL,
    user_password   			VARCHAR(32) NOT NULL,
    user_profilepic 			VARCHAR(20),
    user_status     			INT(4) NOT NULL,
		
	CONSTRAINT users_pk PRIMARY KEY (user_id)
)
ENGINE = InnoDB;

# Table des manifestations publiées par les membres du BDE :
CREATE TABLE manifestations
(
    manifestation_id           	INT(7) NOT NULL AUTO_INCREMENT,
    manifestation_title         VARCHAR(50) NOT NULL,
    manifestation_description	VARCHAR(255) NOT NULL,
    manifestation_picture       VARCHAR(20),
    manifestation_begin         DATE NOT NULL,
    manifestation_end			DATE,
	manifestation_ponctuel		BOOLEAN NOT NULL,
	manifestation_price			FLOAT(7, 2) NOT NULL,
    manifestation_likes			INT(8) NOT NULL,
    manifestation_publicy		BOOLEAN NOT NULL,
    manifestation_iduser        INT(7) NOT NULL,
		
	CONSTRAINT manifestations_pk PRIMARY KEY (manifestation_id),
	CONSTRAINT manifestations_users_fk FOREIGN KEY (manifestation_iduser) REFERENCES users(user_id)
)
ENGINE = InnoDB;

# Table des photos publiées par les étudiants :
CREATE TABLE pictures
(
    picture_id					INT(7) NOT NULL AUTO_INCREMENT,
    picture_title				VARCHAR(50) NOT NULL,
    picture_image				VARCHAR(20) NOT NULL,
    picture_date				DATE NOT NULL,
    picture_likes				INT(8) NOT NULL,
    picture_publicy				BOOLEAN NOT NULL,
    picture_iduser				INT(7) NOT NULL,
    picture_idmanifestation		INT(7) NOT NULL,
	
	CONSTRAINT pictures_pk PRIMARY KEY (picture_id),
	CONSTRAINT pictures_users_fk FOREIGN KEY (picture_iduser) REFERENCES users(user_id),
	CONSTRAINT pictures_manifestations_fk FOREIGN KEY (picture_idmanifestation) REFERENCES manifestations(manifestation_id)
)
ENGINE = InnoDB;

# Table des commentaires sous les photos :
CREATE TABLE comments
(
    comment_id					INT(7) NOT NULL AUTO_INCREMENT,
    comment_text				VARCHAR(255) NOT NULL,
    comment_date				DATE NOT NULL,
    comment_publicy				BOOLEAN NOT NULL,
    comment_iduser				INT(7) NOT NULL,
    comment_idpicture			INT(7) NOT NULL,
	
	CONSTRAINT comments_pk PRIMARY KEY (comment_id),
	CONSTRAINT comments_users_fk FOREIGN KEY (comment_iduser) REFERENCES users(user_id),
	CONSTRAINT comments_pictures_fk FOREIGN KEY (comment_idpicture) REFERENCES pictures(picture_id)
)
ENGINE = InnoDB;

# Table contenant la liste de toutes les activités :
CREATE TABLE activities
(
    activity_name				VARCHAR(30) NOT NULL,
	activity_description		VARCHAR(255) NOT NULL,
	activity_picture			VARCHAR(20),
	
	CONSTRAINT activities_pk PRIMARY KEY (activity_name)
)
ENGINE = InnoDB;

# Table représentant la boîte à idées :
CREATE TABLE ideas
(
    idea_id						INT(7) NOT NULL AUTO_INCREMENT,
    idea_title					VARCHAR(50) NOT NULL,
	idea_description			VARCHAR(255) NOT NULL,
	idea_picture				VARCHAR(20),
    idea_iduser					INT(7) NOT NULL,
	
	CONSTRAINT ideas_pk PRIMARY KEY (idea_id),
	CONSTRAINT ideas_users_fk FOREIGN KEY (idea_iduser) REFERENCES users(user_id)
)
ENGINE = InnoDB;

# Table reliant les manifestations et les utilisateurs inscrits :
CREATE TABLE register
(
    user_id						INT(7) NOT NULL,
    manifestation_id			INT(7) NOT NULL,
	
	CONSTRAINT register_pk PRIMARY KEY (user_id, manifestation_id),
	CONSTRAINT register_user_pk FOREIGN KEY (user_id) REFERENCES users(user_id),
	CONSTRAINT register_manifestation_pk FOREIGN KEY (manifestation_id) REFERENCES manifestations(manifestation_id)
)
ENGINE=InnoDB;

# Table reliant les activités pratiquées et les utilisateurs :
CREATE TABLE practise
(
    activity_name				VARCHAR(30) NOT NULL,
    user_id						INT(7) NOT NULL,
	
	CONSTRAINT practise_pk PRIMARY KEY (activity_name, user_id),
	CONSTRAINT practise_activities_fk FOREIGN KEY (activity_name) REFERENCES activities(activity_name),
	CONSTRAINT practise_users_fk FOREIGN KEY (user_id) REFERENCES users(user_id)
)
ENGINE = InnoDB;

# Table des produits de la boutique :
CREATE TABLE products
(
    product_id					INT(7) NOT NULL AUTO_INCREMENT,
    product_name				VARCHAR(50) NOT NULL,
    product_description			VARCHAR(255) NOT NULL,
    product_picture				VARCHAR(20) NOT NULL,
    product_type				VARCHAR(25) NOT NULL,
    product_price				FLOAT(7, 2) NOT NULL,
    product_stock				INT(4) NOT NULL,
	
	CONSTRAINT products_pk PRIMARY KEY (product_id)
)
ENGINE = InnoDB;
