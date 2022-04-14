# best_sleep

This Project is Copyright.
Forbidden for Sale.

// Here how I did The Entity & Relation & Crud & Migrate to Data Base.

// So first I created Entity's choosen The Tables, Exem: Produit is The Table "prix" is The Property.

symfony console make: entity
Class name of the entity to create or update (e.g. GrumpyKangaroo): Then I Choosed : Product
 > Produit

New property name (press <return> to stop adding fields):
 > prix
  
  Field type (enter ? to see all types) [string]:
 > decimal
  
  
 Precision (total number of digits stored: 100.00 would be 5) [10]:
 > 10
  
  Scale (number of decimals to store: 100.00 would be 2) [0]:
 > 2
  
  Can this field be null in the database (nullable) (yes/no) [no]: Choose yes or no depends on your needs i choosed No whether you write it or just press Enter
 > NO
  
   updated: src/Entity/Produit.php
  
  Add another property? Enter the property name (or press <return> to stop adding fields):
 > image 
  
  Field type (enter ? to see all types) [string]:
 > ?
// If am not sure what Option to choose then I writed Question Mark (?) Then gave me Options like shown here 
Main types
  * string
  * text
  * boolean
  * integer (or smallint, bigint)
  * float

Relationships / Associations
  * relation (a wizard 🧙 will help you build the relation)
  * ManyToOne
  * OneToMany
  
  
  ❯ symfony console make:entity

 Class name of the entity to create or update (e.g. BraveElephant):
 > LigneCommande

 created: src/Entity/LigneCommande.php
 created: src/Repository/LigneCommandeRepository.php
 
 Entity generated! Now let's add some fields!
 You can always add more fields later manually or by re-running this command.

 New property name (press <return> to stop adding fields):
 > nom

 Field type (enter ? to see all types) [string]:
 > 

 Field length [255]:
 > 

 Can this field be null in the database (nullable) (yes/no) [no]:
 > 

 updated: src/Entity/LigneCommande.php
  
  
  
  
 Add another property? Enter the property name (or press <return> to stop adding fields):
 > quantite

 Field type (enter ? to see all types) [string]:
 > 
❯ symfony console make:entity

 Class name of the entity to create or update (e.g. OrangePizza):
 > Commande

 created: src/Entity/Commande.php
 created: src/Repository/CommandeRepository.php
  
  
  Entity generated! Now let's add some fields!
 You can always add more fields later manually or by re-running this command.

 New property name (press <return> to stop adding fields):
 > date          

 Field type (enter ? to see all types) [string]:
 > 

 Field length [255]:
 > 

 Can this field be null in the database (nullable) (yes/no) [no]:
 > 

 updated: src/Entity/Commande.php

 Add another property? Enter the property name (or press <return> to stop adding fields):
 > statut

 Field type (enter ? to see all types) [string]:
 > 
❯ symfony console make:entity
User

 Class name of the entity to create or update (e.g. AgreeablePuppy):
 > User

 Your entity already exists! So let's add some new fields!

 New property name (press <return> to stop adding fields):
 > nom

 Field type (enter ? to see all types) [string]:
 > 

 Field length [255]:
 > 

 Can this field be null in the database (nullable) (yes/no) [no]:
 > 

 updated: src/Entity/User.php

  
  
  Here how I did all The Relations:
  
  New property name (press <return> to stop adding fields):
 > cotegories

 Field type (enter ? to see all types) [string]:
 > ?

Main types
  * string
  * text
  * boolean
  * integer (or smallint, bigint)
  * float

Relationships / Associations
  * relation (a wizard 🧙 will help you build the relation)
  * ManyToOne
  * OneToMany
  * ManyToMany
  * OneToOne

Array/Object Types
  * array (or simple_array)
  * json
  * object
  * binary
  * blob

Date/Time Types
  * datetime (or datetime_immutable)
  * datetimetz (or datetimetz_immutable)
  * date (or date_immutable)
  * time (or time_immutable)
  * dateinterval

Other Types
  * ascii_string
  * decimal
  * guid


 Field type (enter ? to see all types) [string]:
 > relation

 What class should this entity be related to?:
 > Categorie
  
  What type of relationship is this?
 ------------ ------------------------------------------------------------------------ 
  Type         Description                                                             
 ------------ ------------------------------------------------------------------------ 
  ManyToOne    Each Produit relates to (has) one Categorie.                            
               Each Categorie can relate to (can have) many Produit objects            
                                                                                       
  OneToMany    Each Produit can relate to (can have) many Categorie objects.           
               Each Categorie relates to (has) one Produit                             
                                                                                       
  ManyToMany   Each Produit can relate to (can have) many Categorie objects.           
               Each Categorie can also relate to (can also have) many Produit objects  
                                                                                       
❯ symfony console make:entity

 Class name of the entity to create or update (e.g. FierceGnome):
 > ligne_commande

 Your entity already exists! So let's add some new fields!

 New property name (press <return> to stop adding fields):
 > 


           
  Success! 
  
  AM continuing on adding Properties to my Table "ligne_commande"
  Class name of the entity to create or update (e.g. DeliciousPopsicle):
 > ligne_commande

 Your entity already exists! So let's add some new fields!

 New property name (press <return> to stop adding fields):
  list
  
 Field type (enter ? to see all types) [string]:
 > relation

 What class should this entity be related to?:
 > Produit
  
   ManyToOne    Each LigneCommande relates to (has) one Produit.                            
               Each Produit can relate to (can have) many LigneCommande objects            
                                                                                           
  OneToMany    Each LigneCommande can relate to (can have) many Produit objects.           
               Each Produit relates to (has) one LigneCommande                             
                                                                                           
  ManyToMany   Each LigneCommande can relate to (can have) many Produit objects.           
               Each Produit can also relate to (can also have) many LigneCommande objects  
                                                                                           
  OneToOne     Each LigneCommande relates to (has) exactly one Produit.                    
               Each Produit also relates to (has) exactly one LigneCommande. 
  
  
  
  
  Relation type? [ManyToOne, OneToMany, ManyToMany, OneToOne]:
 > OneToMany

 A new property will also be added to the Produit class so that you can access and set the related LigneCommande object from it.

 New field name inside Produit [ligneCommande]:
 > 

 Is the Produit.ligneCommande property allowed to be null (nullable)? (yes/no) [yes]:
 > no

 Do you want to activate orphanRemoval on your relationship?
 A Produit is "orphaned" when it is removed from its related LigneCommande.
 e.g. $ligneCommande->removeProduit($produit)
 
 NOTE: If a Produit may *change* from one LigneCommande to another, answer "no".

 Do you want to automatically delete orphaned App\Entity\Produit objects (orphanRemoval)? (yes/no) [no]:
 > 

 updated: src/Entity/LigneCommande.php
 updated: src/Entity/Produit.php

 Add another property? Enter the property name (or press <return> to stop adding fields):
 >   


           
  Success! 
  
  
  
  Now that Relation has been Done Am doing Migration to my Data Base
  
 
  Next: When you're ready, create a migration with php bin/console make:migration
 
❯ php bin/console make:migration


           
  Success! 
  
  Next: Review the new migration "migrations/Version20220414142131.php"
 Then: Run the migration with php bin/console doctrine:migrations:migrate
 See https://symfony.com/doc/current/bundles/DoctrineMigrationsBundle/index.html
❯ php bin/console doctrine:migrations:migrate

 WARNING! You are about to execute a migration in database "bestsleep" that could result in schema changes and data loss. Are you sure you wish to continue? (yes/no) [yes]:
 > 

[notice] Migrating up to DoctrineMigrations\Version20220414142131
[notice] finished in 668.6ms, used 20M memory, 1 migrations executed, 5 sql queries

❯ symfony console make:crud

 The class name of the entity to create CRUD (e.g. VictoriousPopsicle):
 > Categorie

 Choose a name for your controller class (e.g. CategorieController) [CategorieController]:
 > 

 created: src/Controller/CategorieController.php
 created: src/Form/CategorieType.php
 created: templates/categorie/_delete_form.html.twig
 created: templates/categorie/_form.html.twig
 created: templates/categorie/edit.html.twig
 created: templates/categorie/index.html.twig
 created: templates/categorie/new.html.twig
 created: templates/categorie/show.html.twig

           
  Success! 
           
         
  The Last am doing is The Crud
  
  Next: Check your new CRUD by going to /categorie/
❯ symfony console make:crud

 The class name of the entity to create CRUD (e.g. FierceChef):
 > Produit

 Choose a name for your controller class (e.g. ProduitController) [ProduitController]:
 > 


                                                                                                                        
 [ERROR] The file "src/Controller/ProduitController.php" can't be generated because it already exists.                  
                                                                                                                        
 If Exist it won't do it ! But if My Entity doesn't exist yet will make then The Crud
  
  The class name of the entity to create CRUD (e.g. GrumpyPopsicle):
 > LigneCommande

 Choose a name for your controller class (e.g. LigneCommandeController) [LigneCommandeController]:
 > 

 created: src/Controller/LigneCommandeController.php
 created: src/Form/LigneCommandeType.php
 created: templates/ligne_commande/_delete_form.html.twig
 created: templates/ligne_commande/_form.html.twig
 created: templates/ligne_commande/edit.html.twig
 created: templates/ligne_commande/index.html.twig
 created: templates/ligne_commande/new.html.twig
 created: templates/ligne_commande/show.html.twig

           
  Success! 
           
  Next: Check your new CRUD by going to /ligne/commande/
❯ symfony console make:crud

 The class name of the entity to create CRUD (e.g. GrumpyElephant):
 > Commande

 Choose a name for your controller class (e.g. CommandeController) [CommandeController]:
 > 

 created: src/Controller/CommandeController.php
 created: src/Form/CommandeType.php
 created: templates/commande/_delete_form.html.twig
 created: templates/commande/_form.html.twig
 created: templates/commande/edit.html.twig
 created: templates/commande/index.html.twig
 created: templates/commande/new.html.twig
 created: templates/commande/show.html.twig

           
  Success! 
           
  
  Next: Check your new CRUD by going to /commande/
❯ symfony console make:crud
User

 The class name of the entity to create CRUD (e.g. BravePuppy):
 > User

 Choose a name for your controller class (e.g. UserController) [UserController]:
 > 

 created: src/Controller/UserController.php
 created: src/Form/UserType.php
 created: templates/user/_delete_form.html.twig
 created: templates/user/_form.html.twig
 created: templates/user/edit.html.twig
 created: templates/user/index.html.twig
 created: templates/user/new.html.twig
 created: templates/user/show.html.twig

           
  Success! 
           
  
  How to Do User :
  
  Symfony console make:user
  
  
 The name of the security user class (e.g. User) [User]:
 > User

 Do you want to store user data in the database (via Doctrine)? (yes/no) [yes]:
 > 

 Enter a property name that will be the unique "display" name for the user (e.g. email, username, uuid) [email]:
 > 

 Will this app need to hash/check user passwords? Choose No if passwords are not needed or will be checked/hashed by some other system (e.g. a single sign-on server).

 Does this app need to hash/check user passwords? (yes/no) [yes]:
 > 

 created: src/Entity/User.php
 created: src/Repository/UserRepository.php
 updated: src/Entity/User.php
 updated: config/packages/security.yaml

           
  Success! 
  
  
  Let's make The Registration form
  
  Creating a registration form for App\Entity\User

 Do you want to add a @UniqueEntity validation annotation on your User class to make sure duplicate accounts aren't created? (yes/no) [yes]:
 > 

 Do you want to send an email to verify the user's email address after registration? (yes/no) [yes]:
 > no

 Do you want to automatically authenticate the user after registration? (yes/no) [yes]:
 > yes

 ! [NOTE] No Guard authenticators found - so your user won't be automatically authenticated after registering.          

 What route should the user be redirected to after registration?:
  [0 ] app_accueil
  [1 ] app_contact
  [2 ] app_produit_index
  [3 ] app_produit_new
  [4 ] app_produit_show
  [5 ] app_produit_edit
  [6 ] app_produit_delete
  [7 ] _preview_error
  [8 ] _wdt
  [9 ] _profiler_home
  [10] _profiler_search
  [11] _profiler_search_bar
  [12] _profiler_phpinfo
  [13] _profiler_search_results
  [14] _profiler_open_file
  [15] _profiler
  [16] _profiler_router
  [17] _profiler_exception
  [18] _profiler_exception_css
 > 0

 updated: src/Entity/User.php
 created: src/Form/RegistrationFormType.php
 created: src/Controller/RegistrationController.php
 created: templates/registration/register.html.twig

           
  Success! 
           
 Next:
 Make any changes you need to the form, controller & template.

 Then open your browser, go to "/register" and enjoy your new form!

❯ Symfony console make:auth

 What style of authentication do you want? [Empty authenticator]:
  [0] Empty authenticator
  [1] Login form authenticator
 > 1

 The class name of the authenticator to create (e.g. AppCustomAuthenticator):
 > AppUserAuthenticator

 Choose a name for the controller class (e.g. SecurityController) [SecurityController]:
 > 

 Do you want to generate a '/logout' URL? (yes/no) [yes]:
 > 

 created: src/Security/AppUserAuthenticator.php
 updated: config/packages/security.yaml
 created: src/Controller/SecurityController.php
 created: templates/security/login.html.twig

           
  Success! 
  
  Whôuh let's Create Data Base Now  With DOCTRINE!!
  
  To Create a Data Base you need to make Set Up or Seetings on "ENV3 :
  Need also to create your data base in there I mean data base Name for my case is : bestSleep 
  If you use my SQL then in "ENV" need to decomment where it tells : DATABASE_URL="mysql
  then you good to go for creating your own Data Base in Terminal
  
  Once done! Need to be checked my Migrating : php bin/console make:migration if okay then will show that was Successfully Migrated 
  
  Created database `bestSleep` for connection named default
❯ php bin/console make:migration
  
   Success! 
  
  Then : 
  
  php bin/console doctrine:migrations:migrate
  WARNING! You are about to execute a migration in database "bestsleep" that could result in schema changes and data loss. Are you sure you wish to continue? (yes/no) [yes]:
 > 

[notice] Migrating up to DoctrineMigrations\Version20220414082736
[notice] finished in 398ms, used 20M memory, 1 migrations executed, 3 sql queries
  
  
  Huraaayyyy Done our Data BAse just need checked that's All ya !!!
  
  
  
           
  
  
  
  
  
  
  
  
  
  
  
  
  
  

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
           
  
