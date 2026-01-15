<?php
class Customer {

    public string $forename;
    public string $surname;
    public string $email;
    public array $accounts; 

    public function __construct($forename, $surname, $email, $accounts = []) {
        $this->forename = $forename;
        $this->surname = $surname;
        $this->email = $email;
        $this->accounts = $accounts;
    }

    public function getFullName(): string {
        return $this->forename . ' ' . $this->surname;
    }
}
?>
