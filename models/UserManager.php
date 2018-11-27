<?php

class UserManager
{
    private $_db;

    /**
     * Construct for class UserManger.
     *
     * @param PDO $db
     */
    public function __construct(PDO $db)
    {
        $this->setDb($db);
    }

    /**
     * Getters for Database.
     *
     * @return self
     */
    public function getDb()
    {
        return $this->_db;
    }

    /**
     * Setters for Database.
     *
     * @param PDO $db
     *
     * @return self
     */
    public function setDb(PDO $db)
    {
        $this->_db = $db;

        return $this;
    }

    /**
     * Function for get all users into database.
     *
     * @return array $arrayOfUsers
     */
    public function getUsers()
    {
        $req_all_users = $this->getDb()->query('SELECT * FROM users');
        $users = $req_all_users->fetchAll(PDO::FETCH_ASSOC);

        foreach ($users as $user) {
            $arrayOfUsers[] = new Person($user);
        }

        return $arrayOfUsers;
    }

    /**
     * Function for add users into databse.
     *
     * @return self
     */
    public function addUser(Person $user)
    {
        $add_users = $this->getDb()->prepare('INSERT INTO users (name, damage) VALUES (:name, :damage)');

        $add_users->bindValue(':name'->$_POST['name']);
        // $add_users->bindValue(':damage'->'0', PDO::PARAM_INT);
        $add_users->execute();
    }
}
