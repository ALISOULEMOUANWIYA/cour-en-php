<?php

namespace src\model;

use libs\system\Model;

class UserDB extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getConnection($email, $password)
    {
        return $this->entityManager
            ->createQuery("SELECT u FROM user u WHERE u.email = :em AND u.password = :pass")
            ->setParameter('em', $email)
            ->setParameter('pass', $password)
            ->getResult(); //array(Object)

    }

    public function getListeUser()
    {
        $sql = "SELECT u
                FROM user u";
        return $this->entityManager
            ->createQuery($sql)
            ->getResult(); //array(Object)
    }


    public function ControllerSaisie($email, $password)
    {
        if (!empty($email)  && !empty($password)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return "";
            } else {
                return  "format E-mail incorecte";
            }
        } else {
            return "Tous les champs sont obligatoirs";
        }
    }

    public function addUser($email, $password)
    {

        if ($this->conne->connect()) {
            $this->queryBuilder
                ->insert('user')
                ->values(
                    [
                        'email' => '?',
                        'password' => '?',
                    ]
                )
                ->setParameter(0, $email)
                ->setParameter(1, $password);
            $this->queryBuilder->execute();
            return 1;
        } else {
            return 0;
        }
        // echo $this->queryBuilder->getSql() . PHP_EOL;
    }



    public function deleteUser($id)
    {
        if ($this->conne->connect()) {
            $this->queryBuilder
                ->delete('user')
                ->where('id = ' . $id);
            return $this->queryBuilder->execute();
            // echo "s";
            // echo $this->queryBuilder->getSql() . PHP_EOL . " ";
        }
    }
}
