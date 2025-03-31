# Projet WordPress Portfolio

## Étapes réalisées

1. **Installation de Bedrock**
   - Création d'une installation WordPress Bedrock avec Composer
   - Configuration des variables d'environnement

2. **Thème enfant Twenty Twenty-One**
   - Création et configuration du thème enfant
   - Personnalisation des templates et styles

3. **Custom Post Type Portfolio**
   - Création du CPT Portfolio 
   - Templates personnalisés (archive-portfolio.php, single-portfolio.php)

4. **Intégration ACF**
   - Champs personnalisés pour les projets de portfolio
   - Champs pour la page d'accueil

5. **Page d'accueil personnalisée**
   - Présentation et compétences
   - Affichage des meilleures réalisations

## Difficultés rencontrées

- Adaptation au système de fichiers Bedrock
- Configuration des règles de réécriture d'URL
- Migration du thème de Twenty Twenty-Five (block) vers Twenty Twenty-One (traditionnel)
- Choisir la page d'accueuil en temp que lien original

## Installation et lancement

### Prérequis
- PHP 7.4+
- MySQL 5.7+
- Composer
- Serveur web (Apache/Nginx)

### Installation

1. **Cloner le repository**
2. cd wordpress-eval
3. **Installer les dépendances avec composer install**
4. **Configurer l'environnement**
- Copier `.env.example` vers `.env`
- Modifier les variables de base de données

4. **Importer la base de données**
- Créer une base de données `nithael_bedrock`
- Importer le fichier SQL fourni

5. **Configurer le serveur web**
- Pointer le document root vers le dossier `/web`

6. **Accéder au site**
- Frontend: `http://localhost/wordpress-eval/web/`
- Admin: `http://localhost/wordpress-eval/web/wp/wp-admin/`


   

