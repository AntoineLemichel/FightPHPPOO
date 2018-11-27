<?php

require '../entities/Person.php';
require '../models/Database.php';
require '../models/UserManager.php';

$userManager = new UserManager(Database::DB());
$users = $userManager->getUsers();

include '../views/indexVue.php';
