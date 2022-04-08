# Exercice Formes_poo

## 1. Contexte de l'évaluation 

Module de formation PHP Programmation Orientée Objet  
  
Créer un ensemble de classes permettant de manipuler des formes.  


#### 1.1 Fonctionnalitées désirées :

##### 1. Classe Point2D :
	1. Créer la classe Point2D caractérisée par 2 coordonnées x et y.  
	2. Définir les accesseurs ,et le constructeur d’initialisation.  
	3. Ajouter à la classe la fonction magique __toString qui permet d’afficher les propriétés d’un objet Point2D sous la forme : Point(x =10,y =3)  
	4. Ajouter à la classe une méthode bouger prenant en paramètre les deux réels dx et dy et qui permet de translater le point vers le point  x+dx et y+dy   

##### 2. Classe abstraite Forme :
	1. La classe Forme possède un centre de type Point2D et un id.  
	2. Lors de la création d’une Forme, son id est incrémenté selon le nombre de Formes créés.  
	3. Ajouter à la classe les deux méthodes abstraites surface() et périmètre().  
	4. Ajouter la méthode bouger() qui fait tout simplement appel à la méthode bouger() de son centre.  

##### 3. Classe Rectangle :
	1. Créer la classe Rectangle dérivée de la classe Forme et caractérisée par deux attributs : largeur et longueur.  
	2. Ajouter les accesseurs et un constructeur d’initialisation à la classe.  
	3. Définir la méthode surface qui renvoie la surface d’un objet rectangle : largeur*longueur.  
	4. Définir la méthode périmètre qui renvoie le périmètre d’un objet rectangle : 2*(largeur+longueur).  
	5. La méthode __toString() représente chaque rectangle sous la forme :  
		{Rectangle :1              //1 est l'id de la forme  
			Centre:Point(x=2, y=3)  
			Largeur:1  
			Longueur:2  
			surface:2  
			perimetre:6  
		}  

##### 4. Classe Cercle :
	1. Créer la classe Cercle qui hérite de la classe Forme et qui possède en plus un rayon.  
	2. Ajouter les accesseurs et un constructeur d’initialisation.  
	3. Définir la méthode surface qui renvoie la surface d’un objet cercle : π*r2  
	4. Définir la méthode périmètre qui renvoie le périmètre d’un objet cercle : 2 *π*r  
	5. La méthode __toString() représente chaque cercle sous la forme :   
		{Cercle :2  
			Centre:Point(x=3, y=3)  
			Rayon:2  
			surface:12.57  
			perimetre:12.57  
		}  

##### 5. Classe Carré :
	1. Créer la classe Carré qui hérite de la classe Rectangle (un carré est un rectangle avec largeur =  longueur).  
	2. La classe Carré ne pourra pas être dérivée.  
	3. Attribuer à la classe un constructeur d’initialisation.  
	4. La méthode __toString() représente chaque carré sous la forme :  
		{Carre :3  
			Centre:Point(x=3, y=3)  
			Longueur:1  
			surface:1  
			perimetre:4  
		}  

##### 6. Ecrire un script de Test :

	{Rectangle :1  
	          Centre:Point(x=2, y=3)  
	          Largeur:1  
	          Longueur:2  
	          surface:2  
	          perimetre:6  
	}  
	{Cercle :2  
	          Centre:Point(x=1, y=2)  
	          Rayon:2  
	          surface:12.57  
	          perimetre:12.57  
	}  
	//Après déplacement du cercle par (dx=2,dy=1)  
	{Cercle :2  
	          Centre:Point(x=3, y=3)  
	          Rayon:2  
	          surface:12.57  
	          perimetre:12.57  
	}  
	{Carre :3  
	          Centre:Point(x=3, y=3)  
	           Longueur:1  
	          surface:1  
	          perimetre:4  
	}  

#### 1.2 Contrainte technique : 

- Toute la page doit être gérée en PHP POO


## 2. Environnement technique

- PHP POO
- Serveur local XAMPP



## 3. Procédure de mise en place en local

- Cloner le fichier sur votre ordinateur avec  
  `git clone https://github.com/AnxionnazFlo/exo_Formes_poo.git`

- Pour voir les résultats, lancer un serveur local et ouvrir exoFormes.php

- Tout devrais fonctionner à présent

#### Have fun



 



