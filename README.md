# ProjetPHP
Ce projet a été réalisé durant le cours de PHP de 2ème année de BUT à l'IUT Clermont Auvergne.  

## Utilisation 
1. Charger le fichier "TableProject.sql".
2. Définir le nom, le serveur et les identifiants de la base de données dans le fichier "Config/config.php".
3. Placer le site dans le répertoire de votre serveur WEB (Apache, nginx,..).
4. Vous pouvez vous connecter en utilisant le bouton connexion.

Les identifiants sont :
* user :      admin0
* password:   mdp

Pour l'instant, le changement du mot de passe s'effectue dans la base de données dans la table `tadmin`.
Le mot de passe est hashé.

Mise à jour des news depuis les flux:
La mise à jour peut être effectuée depuis le site en étant connecté en tant qu'admin avec le bouton "Rechargement News" se trouvant dans la barre de menu à droite.

## Notre configuration
* PHP 8.1
* PostgreSQL
* Apache2

## Développeurs 
* Louis Dufour : Louis.Dufour@etu.uca.fr
* Rémi Regnault : Remi.Regnault@etu.uca.fr

## Répartition du travail

**Tâches** | **Louis Dufour**           | **Rémi Regnault** 
 --- |------------------------| --- 
**Métier**_News |                        | X 
**Métier**_News |                        | X 
**Métier**_Flux | X                      |
**Métier**_Admin | X                      |
**Gateway**_News |                        | X 
**Gateway**_Params |                        | X 
**Gateway**_Admin | X                      | 
**Gateway**_Flux | X                      | (légères corrections)
**Controleur**_User |                        |  X
**Controleur**_Admin | X                      | (grosses corrections)
**Controleur**_Front | X                      | (grosses corrections)
**Modèle**_Admin | X                      |  
**Modèle**_News |                        |  X
**Modèle**_Flux |                        |    X  
**Modèle**_Global (version fusion: flux et news) | X                      | 
**Vue**_Erreur|                        |X    
**Vue**_listeNews| X                      |(légères corrections) 
**Vue**_Connexion| X                      |
**Vue**_listeFlux| (légères modification) |X    
**Vue**_navbar|    (légères modification)                    |X    
**Vue**_gestionParametres|                        |X   
**Vue**_formulaireFlux|       (légères modification)                  |X   
**Parseur_XML**| X                      |
**Cleaner**| X                      |(modifications)
**Validation**| X                      |(modifications)
**Table_SQL**| X                      |(modifications des tables SQL)
**Insertion des flux rss**_SQL|                        |X   
**Autoloader**|                        |Faire en sorte que l'autoloader fonctionne
**Pagination** |   |X
 
