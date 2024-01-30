<?php 

//Create a `BankAccount` class with properties for account number, account holder name, and balance. Include methods to deposit, withdraw, and display the account information. Implement proper validation for withdrawal (balance should not go below zero).

class BankAccount {
    private $accountNumber;
    private $accountHolder;
    private $balance;

    public function __construct($accountNumber, $accountHolder, $initialBalance) {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $initialBalance;
    }

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            echo "Insufficient funds for withdrawal.";
        }
    }

    public function displayInfo() {
        echo "Account Number: {$this->accountNumber},<br> Account Holder: {$this->accountHolder},<br> Balance: {$this->balance} USD";
    }
}

// Create a bank account object
$account1 = new BankAccount("1234567", "Ankit Singh", 110000);

// Deposit and withdraw from the account
$account1->deposit(500);
$account1->withdraw(200);

// Display account information
$account1->displayInfo();


?>