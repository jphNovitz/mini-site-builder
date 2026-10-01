# Mini Site Builder

Génère, à partir d'un formulaire, une **carte de visite** numérique pour une entreprise, exportée en site statique déployable sur n'importe quel hébergeur.

## Language

**Carte de visite**:
Le site statique généré pour une entreprise : une page unique affichant ses informations, avec deux fonctionnalités seulement — un QR code (dont la **cible** est configurable par le lead) et un bouton de partage vCard. Accessible à `votredomaine.com/cartes/slug-entreprise`. À la création, elle est **en attente** ; vous l'**approuvez** depuis l'espace admin pour la **publier**.
_Avoid_: Business card, mini site, page (trop vague)

**Cible du QR code**:
Le contenu qu'encode le QR code de la carte, au choix du lead à la soumission : soit les coordonnées au format vCard (comportement par défaut — ajout direct au carnet d'adresses du téléphone qui scanne), soit une redirection vers le site web externe du lead (son champ `website`). Un seul QR code est affiché à la fois, jamais les deux simultanément. Choisir "site web" rend `website` obligatoire — impossible de cibler un site que le lead n'a pas renseigné.
_Avoid_: Mode QR, type de QR (trop technique, ne dit pas ce qui varie concrètement)

**Site statique**:
Le livrable de la carte de visite : un petit nombre de fichiers HTML/CSS/JS/assets réellement générés sur disque à l'approbation, autonomes (aucune dépendance serveur à l'exécution), pour que vous puissiez les copier tels quels vers l'hébergement limité d'un lead qui passe à un nom de domaine propre.
_Avoid_: Site généré, export, rendu dynamique

**Lead**:
L'entreprise qui remplit le formulaire pour obtenir sa carte de visite gratuite. Elle ne peut pas éditer sa carte elle-même : toute modification passe par un contact direct avec vous. La carte de visite est un lead magnet — son but est d'inciter le lead à faire appel à vos services, pas de vendre un palier payant du produit lui-même.
_Avoid_: Client, utilisateur, visiteur
