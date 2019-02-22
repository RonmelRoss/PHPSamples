<?php
//Show usage of construct and destruct
class bankAccount {
	private $accountNumber;
	private $totalBalance;
	
	public function __construct($accNo, $balance){
		$this-> accountNumber=$accNo;
		$this-> totalBalance=$balance;
		echo "This is a new account";
	}
	
	public function __destruct(){
		mysqli_close($conn);
	}
	
}

$newAccount = new bankAccount(2019, 20000);

print_r("<pre>");
print_r($newAccount);
print_r("<pre>");
?>
