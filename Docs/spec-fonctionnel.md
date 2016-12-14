spec fonctionnel 




---
### 3. Installation de l'application

L'installation ce fera sur le serveur fournit par le client. le serveur possede une configuration de 500 GB (Gigabytes) d'espace libre, 6 GB de mémoire vive tournant sur un processeur de 3 GH (Gigahertz) en dual-core. L'installation de fonctionnalités tel que, le système d'exploitation **Linux**, le logiciel **PHP version 7**, l'interface de configuration graphique **Phpmyadmin** ainsi que la base de donnée **Mysql** sera également effectué.

Pour assurer la bonne mise en place de l'application, pendant une periode d'un mois le maintien post-production pourra être mis en place sur un service en ligne, comportant toutes les données nécessaires à la maintenance de l'application. Une fois le delais passé, la continuité de la maintenance pourra être renouvelée en accord avec le client.


---
### 4. Mise à jour de l'application

Suite au déploiement en production, les mises a jours de l'application pourront survenir après une période de 6 mois de production, selon le besoin du client et de l'accord entretenu avec lui.

Les mises à jours seront portées sur les version du système puis de toutes ses fonctionnalités, ainsi qu'en fonction de la réorganisation de la plate-forme de stockage qui sera intégré à l'application.


----
### 5. Fonctionnement de l'application

Cette application, à destination d'une utilisation industrielle à pour procéder de gérer les stocks du magasin de l'entreprise, en permettant la comptabilité des produits manipulés par les employés.

L'application sera composé, d'une page de login pour se connecter avec le compte **Administrateur** ou un compte **Utilisateur**, d'une section **Gestion des stocks** qui permettra l'ajout, la modification et la suppression d'articles dans la base de donnée, d'une section **Gestion Utilisateurs** qui permettra l'ajout ainsi que la suppression d'utilisteurs, d'une section **Liste des articles** donnant accès à une vue d'ensemble des articles du magasin en stock, puis enfin d'une section **Liste des fournisseurs** qui permettra de répertorier l'ensemble des fournisseurs partenaire.

----
### 6. Périmètre d'utilisation

L'application est utilisé par les employés de l'entreprise en **intranet** et pourra être maintenue en ligne sur le web. Seul les dirigeants de l'entreprise ainsi qu'un employé désigné auront la possibilité d'utiliser le compte **Administrateur** qui aura la possibilité de gérer les droits d'accès de l'application via la section ** gestion des utilisateurs **.

L'utilisation d'un compte **Utilisateur** aura comme seul permission de parcourir l'ensemble des stocks de l'entreprise via les sections **Liste des articles** et **Liste des fournisseurs**.


----
### 7. Besoins de fonctionnement

L'application doit comporter une saisie de tous les champs des divers articles dans le magasin tels que :
 
1. Le nom
2. La description
3. La référence
4. Le fournisseur

ainsi que de leur numérotations :

* La ligne
* Le casier
* La colonne

7.2 L'ensemble de ces informations seront affichées au sein d'une **SPA** (Single Page Application).

7.3 Sur les sections annexes se trouveront une vue d'ensemble comportant des statistiques des utilisateurs et des articles en stocks.

----
## 8. Administration des utilisateurs

----
### 8.1 Liste des comptes utilisateurs

8.1.1 L'ensemble des comptes utilisateurs sera affiché via la section **Gestion des Utilisateurs**, avec comme informations l'identifiant unique (Id), son prénom, sa date de création puis sa durée depuis sa création.

8.1.2 Seul un employé désigné en tant qu' **Administrateur** pourra consulté cette section.

8.1.3 Un utilisateur aura les informations suivantes :

* Un encart avec les statistiques des entrées 

* Prénom
* Mot de passe
* Date de création
* Crée depuis

----
### 8.2 Création d'un utilisateur

8.2.1 Seul le compte *Administrateur* sera habilité à **crée** des comptes utilisateurs via la section **Gestion des Utilisateurs**.

8.2.2 En cliquant sur le bouton *ajouter utilisateur* une fenêtre de type modal s'affichera avec les champs de saisie suivant :

* Prénom
* Mot de passe

----
### 8.3 Modification d'un utilisateur

8.3.1 Seul le compte *Administrateur* sera habilité à **modifié** des comptes utilisateurs via la section **Gestion des Utilisateurs**.

8.3.2 En cliquant sur le bouton *modifier* une fenêtre de type modal s'affichera avec les champs de saisis suivant :

* Prénom
* Mot de passe

----
### 8.4 Suppression d'un utilisateur

8.4.1 Seul le compte *Administrateur* sera habilité à **supprimé** des comptes utilisateurs via la section **Gestion des Utilisateurs**.

8.4.2 En cliquant sur le bouton *supprimer* une fenêtre de type modal s'affichera avec une case à cocher pour sélectionner l'utilisateur à supprimé et deux bouton:

* Supprimer 
* Annuler 

----
## 9. Administration des articles

9.1 L'Administrateur pourra gerer les articles.

----
### 9.2 Création d'un article

9.2.1 L'administrateur pourra ajouter un article. Les champs suivant sont saisis par l'administrateur via la section **Gestion des stocks** : 

* Nom
* Description
* Référence
* Fournisseur

ainsi que de leur numérotations :

* Ligne
* Casier
* Colonne

9.2.2 Des images pourront être ajoutées à chaques articles via le formulaire en cliquant sur le bouton **Images** dans la partie **Modifier articles**. Les images doivent être au format (jpg,png ou gif) et d'une taille maximal de 15 Kilo octets (ko) ! 

---
### 9.3 Sélection d'un article

9.3.1 Pour sélectionner un article, l'administrateur devra effectuer une recherche via la *barre de recherche*, puis cocher la case correspondante à l'article choisi, situé dans la partie **Modifier articles**.

9.3.2 La selection de l'article sera validée lorsque l'article choisi sera affiché dans la partie **Modifier articles** dans la zone **Article sélectionner**, dès lors l'administrateur pourra donc modifier celle-ci. Voir (9.4.2).


----
### 9.4 Modification des articles

9.4.1 L'administrateur pourra modifier le contenu des articles qui se fera de la manière suivante. La modification des articles ce fait via les boutons **Editer** de chaques caractéristiques de l'article, à l'expection de l'identifiant unique (Id). 

9.4.2 La modification de l'article pourra être effectué lorsque l'article choisi sera sélectionner. Voir (9.3.2).

9.4.3 Des images pourront être ajoutées à chaques articles via le formulaire en cliquant sur le bouton **Images**. Les images doivent être au format (jpg,png ou gif) et d'une taille maximal de 15 Kilo octets (ko) !

----
### 9.5 Recherche d'un article

9.5.1 L'administrateur pourra effectué une recherche dans la partie **Modifier articles**, en fonction de : 

* Mots-clés
* Nom
* Références
* Fournisseurs

9.5.2 L'administrateur et tous les utilisateurs peuvent également consulter tous les articles, en cliquant sur **Liste des articles** dans la barre de navigation pour ouvrir la section présentant une liste de résultats et de statistiques.

----
### 9.6 Contenu d'une liste de résultats

9.6.1 La section **Article** affiche les résultats correspondant à l'état du stock qui contient :
 
* Le nom
* La date
* La référence
* Le fournisseur

9.6.2 Des champs de recherche sont disponible dans la barre de navigation puis également en bas de page.


----
### 9.7 Suppression d'un article

9.7.1 Un utilisateur connecté peut **supprimer** un article via le bouton d'edition.

9.7.2 L'utilisateur devra executé une recherche via la barre de recherche dans la barre de navigation pour selectionné l'article et le supprimé .


----
## 9.8 Architecture technique

9.8.1 Cette application étant dynamique, sera implémentée en HTML5, CSS3, Bootstrap4, JS et PHP7. Le serveur sur lequel sera installé l'application devra disposer de Apache2, Phpmyadmin, Mysql et supporter la version PHP 7.

9.8.2 Le nombre de comptes utilisateur n'est pas limité, le nombre d'utilisateurs connectés simultanément n'est pas limité.

9.8.3 Le nombre d'enregistrements d'articles dans la base de données, n'excédera pas les 10 000 articles.

----
## 9.9 Exigence vis à vis du logiciel

9.9.1 Cette application est compatible pour les versions de navigateurs suivants : 

* Internet explorer supérieur à la version 7
* Firefox supérieur à la version 5
* Safari supérieur à la version 5
* Opéra supérieur à la version 11
