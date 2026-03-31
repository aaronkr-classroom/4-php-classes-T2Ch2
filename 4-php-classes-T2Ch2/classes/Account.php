<?php
/*
    classes/Account.php
    계좌 관리하는 클래스
*/
include_once 'AccountNumber.php';

class Account {
    // 계좌의 속성
    public AccountNumber $acct_num;   // 정수 11001324573521
    public string $type;    // 문자열 'checking', 'savings'
    public float $balance;  // 실수 10012.13
    
    //생성자
    public function __construct(
        AccountNumber $acct_num = null,
        string $type = '', float $balance = 0.0
        ) { 
        $this->acct_num  = $acct_num ?? new AccountNumber();
        $this->type      = $type;
        $this->balance   = $balance; 
    }   

    // 계좌의 메소드 (함수)
    public function deposit(float $amount): float {
        // 예금에 대한 코드가 온다.
        $this->balance += $amount;
        return $this->getBalance();
    }
    public function withdraw(float $amount): float {
        //출금에 대한 코드가 온다.
        $this->balance -= $amount;
        return $this->getBalance();
    }
    public function getBalance(): float {
        return  $this->balance;
    }
}
?>