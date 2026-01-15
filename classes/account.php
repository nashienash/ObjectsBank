<?php
class Account {
    public string $type;
    public string $number;
    public float $balance;


    public function __construct($type, $number, $balance ) {
        $this->type = $type;
        $this->number = $number;
        $this->balance = $balance;
    }

    public function deposit(float $amount): float {
        $this->balance += $amount;
        return $this->balance;
    }

    public function withdraw(float $amount): float {
        $this->balance -= $amount;
        return $this->balance;
    }

    public function getBalance(): float {
        return $this->balance;
    }
}
?>
