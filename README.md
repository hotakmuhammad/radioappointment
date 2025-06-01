# 📅 RadioAppointment

**RadioAppointment** Projet indépendant de création d'un site web (module) pour une clinique radiologique, permettant aux utilisateurs créer un compte de prendre des rendez-vous pour des examens radiologiques.

---

## 🧾 Résumé du projet

Le projet propose la création d’une plateforme en ligne permettant :

### 👤 Pour les patients :
- Création et connexion à un compte sécurisé
- Modification des informations personnelles
- Prise de rendez-vous pour différents services de radiologie
- Consultation des rendez-vous :
  - À venir
  - Archivés (passés)
- Remplacement et annulation d’un rendez-vous existant

### 🛠️ Pour l’administrateur et super administrateur:
- Gestion des comptes utilisateurs :
  - Modification des profils
  - Bannissement d’utilisateurs
  - Changement de rôle (ex. : utilisateur → administrateur)
  - Suppression de comptes
- Gestion des rendez-vous :
  - Suppression ou mise à jour

---

## 🎯 Objectifs

Cette application vise à :
- **Faciliter** la prise de rendez-vous médicaux
- **Optimiser** l'organisation interne de la clinique
- **Renforcer** la sécurité et la traçabilité des actions
- **Garantir** une gestion évolutive grâce à différents **niveaux d’accès** (patients / administrateurs)

---

## ⚙️ Fonctionnalités principales

| Fonctionnalité                     | Patient | Administrateur |
|-----------------------------------|:-------:|:--------------:|
| Création/connexion de compte      |   ✅    |       ✅       |
| Modification de compte personnel  |   ✅    |       ✅       |
| Prise de rendez-vous              |   ✅    |       ✅       |
| Consultation des rendez-vous      |   ✅    |       ✅       |
| Annulation/remplacement           |   ✅    |       ✅       |
| Bannissement utilisateur          |   ❌    |       ✅       |
| Changement de rôle utilisateur    |   ❌    |       ✅       |
| Suppression de comptes/rendez-vous|   ❌    |       ✅       |

---

## 🛠️ Technologies utilisées

> (À adapter selon la stack que tu as utilisée)

- **Frontend** : HTML, CSS, JavaScript
- **Backend** : PHP / Node.js / Python / autre ?
- **Base de données** : MySQL 
- **Sécurité** : Authentification, gestion des rôles, validation des entrées

---

## 🚀 Mise en route

1. **Cloner le dépôt :**
   ```bash
   git clone https://github.com/hotakmuhammad/radioappointment.git
