Training Symfony 2 project
===============================================================

## Introduction
This project could be a part of a blog. It's a training to apply what i learned on symfony in a restricted duration.a

## Installation
### Download and install the package
* Download zip file from gitHub [here](https://github.com/amineamanzou/Training-Symfony)
* Unzip it where you want
* Install Vendors:

```bash
php composer.phar install
```

### Create and/or update your database
* create your database (if not created yet):

```bash
php app/console doctrine:database:create
```

* Update database:

```bash
php app/console doctrine:schema:update --force
```

## Ready !
You can now use this project as a normal symfony 2 project.
