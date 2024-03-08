# PUb G4 -site web restaurant style pub
## Installation:
### 1
-cloner le projet 
-Installer Xamp
-Transférer le projet dans le htdocs de XAMP
-Glisser tout le dossier crée dans XAMP dans VS code
-se rendre sur le bon chemin dans le terminal (cd pub_G4_cadriciel_last_version)
-effectuer les commandes suivantes dans le terminal:

```bash
composer install
```

```bash

```
### 2

transféfer le dossier dans votre htdocs local style xamp
Ouvrir votre serveur local et trouver le dossier relié au projet
- Effacez la route présente par défaut.
- Ajoutez les routes du projet dans le fichier `routes/web.php`: vous devrez associer une route à un tableau contenant le controller et la méthode
- Ex., `"index" => ["SiteController", "index"]`
### 3
- Ajoutez les contrôleurs nécessaires dans le dossier `/controllers`
- Effacez le contrôleur `DefautController`
- Chaque controller doit appartenir au *namespace* `Controller` et hérité de `Base\Controller`
### 4
- Ajoutez les modèles nécessaires au projet dans le dossier `/models`.
- Chaque modèle doit appartenir au *namespace* `Model` et hérité de `Base\Model`
- Chaque modèle doit préciser sa table associée avec la propriété `protected $table = "nom_table";"`
