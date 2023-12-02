<?php
use App\Controllers\IncomesControllers;
use App\Controllers\WithdrawalsControllers;
use App\Enums\IncomeTypeEnum;
use App\Enums\PaymentMethodEnum;
use App\Enums\WithdrawalTypeEnum;

require("../vendor/autoload.php");

//get URL
$slug = $_GET["slug"] ?? "";
$slug = explode("/", $slug);

$resources = $slug[0] == "" ? "/" : $slug[0];
$id = $slug[1] ?? null; 

switch ($resources) {
    case '/':
        echo 'FRONT PAGE';
        break;

    case 'incomes':
        echo 'INCOME`S PAGE';
        break;

    case 'withdrawals':
        echo 'WITHDRAWAL`S PAGE';
        break;

    default:
        echo 'ERROR 404, NOT FOUND';
        break;
}

/* echo"<pre>";
var_dump($slug);
echo"</pre>";
 */
//http://router.test/?slug=asdasdasd == http://router.test/asdasdasd
//http://localhost/phpExcersices/personal_finances/public/asdasdasd

/** First MySQLi Query
 * $incomes_controles = new class instance of IncomesControllers.php
 * $incomes_controles -> store method (fn) in the class IncomesControllers
 * $asociative_array => payment_method - type - etc... 
 */
                            //<------1 - 2------->
    /* $incomes_controller = new IncomesControllers();
    $incomes_controller->store([ 
    "payment_method" => PaymentMethodEnum::BankAccount->value, // meaning enum PaymentMehodEnum -> 2
    "type" => IncomeTypeEnum::Salary->value,
    "date" => date("Y:m:d H:i:s"), //yyyy-mm-dd hh:ii:ss
    "amount" => 20000,
    "description" => "4th Month Salary Payroll"
    ]); */
                            //<------3 - 5 - 6 ------->
/* $withdrawals_controller = new WithdrawalsControllers(); 
$withdrawals_controller->store([
    "payment_method" => PaymentMethodEnum::CreditCard->value,
    "type" => WithdrawalTypeEnum::Purchase->value,
    "date" => date("Y:m:d H:i:s"),
    "amount" => 700,
    "description" => "Toto`s Food!"
    ]); */
                            //<------ 4 ------->
/* $withdrawals_controller = new WithdrawalsControllers(); 
$withdrawals_controller->store([
    ":payment_method": => PaymentMethodEnum::CreditCard->value,
    ":type" => Withdra:walTypeEnum::Purchase->value,
    ":date" => date("Y:m:d H:i:s"),
    ":amount" => 400,
    ":description" => "Eevee`s Food!"
    ]); */
                            //<------ Fetch-all ------->
/* $withdrawals_controller = new WithdrawalsControllers;
$withdrawals_controller->index(); */
                            //<------ Fetch------->
/* $withdrawals_controller = new WithdrawalsControllers;
$withdrawals_controller->show(1); */
                            //<------ NORMAL FETCH WITH WHILE FOR CALL ALL ROWS!------->
/* $incomes_controller = new IncomesControllers();
$incomes_controller->index(); */
                            //<------ Destroy Method incomes ------->
/* $incomes_controller = new IncomesControllers();
$incomes_controller->destroy(3); */
                            //<------ Destroy Method incomes ------->
/* $withdrawals_controller = new WithdrawalsControllers;
$withdrawals_controller->destroy(1); */