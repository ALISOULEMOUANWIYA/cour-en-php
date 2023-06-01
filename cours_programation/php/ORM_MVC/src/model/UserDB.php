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
        $sql = "SELECT u, r, v
                FROM user u 
                INNER JOIN 
                    u.reglement r
                INNER JOIN 
                    u.village v";
        return $this->entityManager
            ->createQuery($sql)
            ->getResult(); //array(Object)
    }

    public function getListeReglement()
    {
        $sql = "SELECT r
                FROM reglement r";
        return $this->entityManager
            ->createQuery($sql)
            ->getResult(); //array(Object)
    }

    public function getListeVillage()
    {
        $sql = "SELECT v FROM village v";
        return $this->entityManager
            ->createQuery($sql)
            ->getResult(); //array(Object)
    }

    public function getListeRoles()
    {
        $sql = "SELECT r FROM roles r";
        return $this->entityManager
            ->createQuery($sql)
            ->getResult(); //array(Object)
    }

    public function getUser_roles()
    {
        $this->queryBuilder
            ->select('r.nom', 'ur.user_id')
            ->from('user_roles', 'ur')
            ->innerJoin('ur', 'user', 'u', 'ur.user_id = u.id')
            ->innerJoin('ur', 'roles', 'r', 'ur.roles_id = r.id');
        return $this->queryBuilder->execute()->fetchAll();
        // echo $this->queryBuilder->getSql() . PHP_EOL;
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

    public function addUser($reglement, $nom, $prenom, $email, $password, $village)
    {

        if ($this->conne->connect()) {
            $this->queryBuilder
                ->insert('user')
                ->values(
                    [
                        'reglement_id' => '?',
                        'nom' => '?',
                        'prenom' => '?',
                        'email' => '?',
                        'password' => '?',
                        'village_id' => '?',
                    ]
                )
                ->setParameter(0, $reglement)
                ->setParameter(1, $nom)
                ->setParameter(2, $prenom)
                ->setParameter(3, $email)
                ->setParameter(4, $password)
                ->setParameter(5, $village);
            $this->queryBuilder->execute();
            return 1;
        } else {
            return 0;
        }
        // echo $this->queryBuilder->getSql() . PHP_EOL;
    }

    public function addRolesUser($idUSerLast, $idRoles)
    {
        $lasteIdUSer = ((int) $idUSerLast);
        if ($this->conne->connect()) {
            $this->queryBuilder
                ->insert('user_roles')
                ->values(
                    [
                        'user_id' => '?',
                        'roles_id' => '?'
                    ]
                )
                ->setParameter(0, $lasteIdUSer)
                ->setParameter(1, $idRoles);
            $this->queryBuilder->execute();

            echo "Success";
            // echo $this->queryBuilder->getSql() . PHP_EOL;
        }
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

    public function deleteRoleUser($id)
    {
        if ($this->conne->connect()) {
            $this->queryBuilder
                ->delete('user_roles')
                ->where('user_id = ' . $id);
            return $this->queryBuilder->execute();
            // echo $this->queryBuilder->getSql() . PHP_EOL . " ";
        }
    }
}
