<?php
namespace app\models;

use app\models\Crud;
use app\Core\config\Database;
class User extends Crud {
    private $id;
    private $firstName;
    private $lastName;
    private $email;
    private $password;
    private $createdAt;

    public function __construct($id = null, $firstName = null, $lastName = null, $email = null, $password = null, $createdAt = null) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->createdAt = $createdAt;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;
    }
    public function showAllUsers(): array
    {
        return $this->selectAll('users');
    }

    public function login($username, $password){
                $this->setEmail($username);

            $this->setPassword($password);
    
            $stmt = Database::getInstance()->getConnection()->prepare("SELECT * FROM users WHERE email = :username AND password = :password");
            $stmt->execute(['email' => $this->getEmail(), 'password' => $this->getPassword()]);
            $user = $stmt->fetch();
    
            if ($user) {
                $this->setId($user['id']);
                return true;
            }
            return false;
        }
    public function add(): void
    {
        
        $this->id = $this->insert('users', 
        [
            'firstName' => $this->firstName,
         'lastName' => $this->lastName, 
         'email' => $this->email, 
        'password' => $this->password,
         'createdAt' => $this->createdAt]
        );
    }

}
?>
