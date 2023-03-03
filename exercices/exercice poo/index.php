<?php
class User
{
    private string $name;
    private string $firstname;
    private int $age;
    private bool $banned = false;

    // contructor
    public function __construct (string $name, string $firstname, $age){
        $this->name = $name;
        $this->firstname = $firstname;
        $this->age = $age;
    }


    // encapsulation
    // getter name
    public function getName(): string
    {
        return $this->name;
    }
    // getter firstname
    public function getFirstName(): string
    {
        return $this->firstname;
    }
    // getter age
    public function getAge(): INT
    {
        return $this->age;
    }
    // getter banned
    public function getBanned():bool
    {
        return $this->banned;
    }
    // setter name
    public function setName(string $name): void
    {
        if ($name !== '') {
        $this->name = $name;
        }
    }
    // setter firstname
    public function setFirstName(string $firstname): void
    {
        if ($firstname !== '') {
        $this->firstname = $firstname;
        }
    }
    // setter age
    public function setAge (int $age):void
    {
        if ($age!== 0) {
            $this->age = $age;
        }
    }
    // setter banned
    public function setBanned(bool $banned):void
    {
        $this->banned = $banned;
    }
    


    // méthode full name
    public function getFullName(): string{
        return $this->firstname . ' ' . $this->name;
    }

    // méthode age
    public function hasLegalAge(): bool
    {
        if ($this->age>=18){
            return true;
        } else{
            return false;
        }
    }
}

    function Ban($ban): bool{
        
        $banUser = $ban->getBanned();
        if ($banUser===true) {
            return true;
        }else{
            return false;
        }
    }  

    // $user1= new User('Belmondo', 'Jean', 25);
    // $user1->setBanned(true);
    // $user1->setAge(15);

    // echo $user1->getFullName() . "<br>";
    // echo $user1->getAge() . "<br>";
    // echo ban($user1). "<br>";
    // echo $user1->hasLegalAge(). "<br>";

    // $user2 = new User('Tommy', 'Serain', 36);
    // echo $user2->getFullName() . "<br>";
    // echo $user2->getAge() . "<br>";
    // echo ban($user2). "<br>";
    // echo $user2->hasLegalAge(). "<br>";

    $users=[
        [
            new User('Alfred', 'John', 25),
        ],
        [
            new User('Merope', 'Jane', 15),
        ]
        ];
// var_dump($users);
foreach($users as $usersArray){
    foreach($usersArray as $user){
        echo $user->getFullName();
        if($user->hasLegalAge()){
            echo ' est majeur';
        }else{
            echo ' est mineur';
        }
    }
    echo "<br>";
}
