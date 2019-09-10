CodeIgniter CRUD
================

A simple example to make a CRUD

User interface:
- Create or add new entries
- Read, retrieve, search, or view existing entries
- Update or edit existing entries
- Delete/deactivate existing entries

Install XAMPP
=============

It is a free open source cross-platfrom web server package.

How to use this repo
====================

This repo contains Bootstraps, Codeigniter code and MySQL 
database. Follow the steps to use this repo:

- Download the repo and paste in your "WWW" folder.
- Open the file "application\config\config.php".
- Find and replace the below code in "config.php" file.
Example:

//  Find the below code
$config['index_page'] = 'index.php';

//  Remove index.php
$config['index_page'] = '';

- Find and change the below code in "config.php" file 
using your file directory path with "http://localhost/"
in the begin.
* Example:

//  Find the below code
$config['base_url'] = '';

//  Change index.php
$config['base_url'] = 'http://localhost/www/example_codeigniter_crud/';

- Import the "codeigniter_crud.sql" to your MySQL database.
- Open the base url in your browser.
Example:

http://localhost/www/example_codeigniter_crud/
