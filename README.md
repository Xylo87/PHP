# ⚡💲 Série d'exercices et d'applications en PHP (POO, application type Magasin/Panier etc.)

## 1. Description
Cette série de projets est un ensemble d'exercices pratiques en **PHP**.
Le "Repository" contient :

0. des leçons, pages de tests et exercices d'algorithmie en PHP
1. des exercices pratiques de Programmation Orientée Objet (POO) en PHP. 
L'un d'entre eux (*PHP\POO\Exercices\POO\exo1*) permet de gérer des relations entre auteurs et leurs livres en mettant en œuvre :
- **L'encapsulation**
- **Les méthodes personnalisées**
- **L'utilisation de `__toString`**
2. Une application type Magasin/Panier d'achat avec un **formulaire** d'ajout de produits (nom, prix, quantité) et un panier d'achat récapitulatif permettant d'ajuster la quantité, de supprimer un produit et de vider le panier.

---

## 2. Fonctionnalités 
1. 
(*PHP\POO\Exercices\POO\exo1*)

- Création d'auteurs avec une gestion de leur bibliographie.
- Création de livres associés à un auteur.
- Ajout automatique d’un livre à la bibliographie de l’auteur.
- Affichage de la liste complète des livres d’un auteur.
- Respect des bonnes pratiques de codage :
  - **Encapsulation**
  - **Conventions de nommage PSR-12**
  - **Méthodes adaptées**

2. 
- Ajout d'un produit via un formulaire **HTML**. 
Le formulaire est traité via la **Superglobale** `$_POST`au sein du fichier `traitement.php`. Chaque `input` est filtré et le contenu du formulaire donne lieu à un tableau associatif stocké en `$_SESSION`.
- Le panier récapitule les produits ajoutés en `$_SESSION` et permet d'ajuster les quantités, de supprimer un produit (y compris si la quantité est égale = 0) ou de vider l'ensemble du panier via `$_GET`, qui permet d'agir via un `Switch/Case` sur le tableau associatif.
- Respect des bonnes pratiques de codage :
  - **Temporisation de sortie**
  - **Templating**

---

## 3. Installation

1. Clonez ce projet depuis GitHub :
   ```bash
   git clone https://github.com/Xylo87/PHP.git
   cd PHP
   ```

2. Assurez-vous que PHP est installé sur votre machine en exécutant la commande suivante :
   ```bash
   php --version
   ```

3. Installer un logiciel type "Laragon" pour disposer d'un environnement qui permet d'exécuter un script PHP :
- Démarrer Laragon
- Enregistrer le "Repo" dans le dossier laragon\www\
- Exécuter la fonction "Web" de Laragon

4. Exécutez le fichier principal pour tester le projet :
   ```bash
   php index.php
   ```
---

## 4. Utilisation

(*PHP\POO\Exercices\POO\exo1*)

Voici un exemple d'utilisation du projet dans un script PHP :

```php
require_once 'Auteur.php';
require_once 'Livre.php';

// Création d'un auteur
$auteur = new Auteur("Victor", "Hugo");

// Création de livres associés à l'auteur
$livre1 = new Livre("Les Misérables", 1862, $auteur);
$livre2 = new Livre("Notre-Dame de Paris", 1831, $auteur);

// Affichage des informations de l'auteur et de sa bibliographie
echo $auteur; // Victor Hugo (Bibliographie : Les Misérables, Notre-Dame de Paris)

// Affichage des informations détaillées d'un livre
echo $livre1; // Les Misérables (1862) écrit par Victor Hugo
```

---

