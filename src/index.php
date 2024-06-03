<?php
class Contact {
    private $name;
    private $surname;
    private $email;
    private $phone;
    private $address;

    public function __construct(){}

    public function name(string $name): Contact
    {
        $this->name = $name;
        return $this;
    }

    public function surname(string $surname): Contact
    {
        $this->surname = $surname;
        return $this;
    }

    public function email(string $email): Contact
    {
        $this->email = $email;
        return $this;
    }

    public function phone(string $phone): Contact
    {
        $this->phone = $phone;
        return $this;
    }

    public function address(string $address): Contact
    {
        $this->address = $address;
        return $this;
    }

    public function build(): Contact
    {
        $newContact = new Contact();
        $newContact->name = $this->name;
        $newContact->surname = $this->surname;
        $newContact->email = $this->email;
        $newContact->phone = $this->phone;
        $newContact->address = $this->address;
        return $newContact;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

}

$contact = new Contact();
$newContact = $contact->phone('000-555-000')
    ->name("John")
    ->surname("Surname")
    ->email("john@email.com")
    ->address("Some address")
    ->build();

var_dump($newContact);

echo "Name: " . $newContact->getName() . "\n";
echo "Surname: " . $newContact->getSurname() . "\n";
echo "Phone: " . $newContact->getPhone() . "\n";
echo "Email: " . $newContact->getEmail() . "\n";
echo "Address: " . $newContact->getAddress() . "\n";
