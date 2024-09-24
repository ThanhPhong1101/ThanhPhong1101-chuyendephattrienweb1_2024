<?php
declare(strict_types=1); 
include 'interfaceI.php';
include 'ClassC.php';
include 'ClassA.php';
include 'ClassB.php';
class Demo {
    public function typeAReturnA(): A 
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    // public function typeBReturnA(): B 
    // {
    //     echo __FUNCTION__ . "<br>";
    //     return new A();
    // }
    public function typeCReturnA(): C 
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    public function typeIReturnA(): I
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    // public function typenullReturnA(): null
    // {
    //     echo __FUNCTION__ . "<br>";
    //     return new A();
    // }
    // public function typeAReturnB(): A
    // {
    //     echo __FUNCTION__ . "<br>";
    //     return new B();
    // }
    public function typeBReturnB(): B
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    public function typeCReturnB(): C
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    public function typeIReturnB(): I
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    // public function typenullReturnB(): null
    // {
    //     echo __FUNCTION__ . "<br>";
    //     return new B();
    // }
    public function typeAReturnC(): A
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }
    public function typeBReturnC(): B
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }
    public function typeCReturnC(): C
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }
    public function typeIReturnC(): I
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }
    // public function typenullReturnC(): null
    // {
    //     echo __FUNCTION__ . "<br>";
    //     return new C();
    // }
    // public function typeAReturnI(): A
    // {
    //     echo __FUNCTION__ . "<br>";
    //     return new I();
    // }
    // public function typeBReturnI(): B
    // {
    //     echo __FUNCTION__ . "<br>";
    //     return new I();
    // }
    // public function typeCReturnI(): C
    // {
    //     echo __FUNCTION__ . "<br>";
    //     return new I();
    // }
    // public function typeIReturnI(): I
    // {
    //     echo __FUNCTION__ . "<br>";
    //     return new I(); 
    // }
    // public function typenullReturnI(): null
    // {
    //     echo __FUNCTION__ . "<br>";
    //     return new I();
    // }
    // public function typeAReturnnull(): A
    // {
    //     echo __FUNCTION__ . "<br>";
    //     return null;
    // }
    // public function typeBReturnnull(): B
    // {
    //     echo __FUNCTION__ . "<br>";
    //     return null;
    // }
    // public function typeCReturnnull(): C
    // {
    //     echo __FUNCTION__ . "<br>";
    //     return null;
    // }

    // public function typeIReturnnull(): I
    // {
    //     echo __FUNCTION__ . "<br>";
    //     return null;
    // }


    //tu PHP 8.1 thì hàm này đã dùng được trước đó thì không
    public function typenullReturnnull(): null
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }


    
}
$demo = new Demo();

$demo->typeAReturnA();
// $demo->typeBReturnA();
$demo->typeCReturnA();
$demo->typeIReturnA();
// $demo->typenullReturnA();

// $demo->typeAReturnB();
$demo->typeBReturnB();
$demo->typeCReturnB();
$demo->typeIReturnB();
// $demo->typenullReturnB();

// $demo->typeAReturnC();
// $demo->typeBReturnC();
$demo->typeCReturnC();
$demo->typeIReturnC();
// $demo->typenullReturnC();

// $demo->typeAReturnI();
// $demo->typeBReturnI();
// $demo->typeCReturnI();
// $demo->typeIReturnI();
// $demo->typenullReturnI();

// $demo->typeAReturnnull();
// $demo->typeBReturnnull();
// $demo->typeCReturnnull();
// $demo->typeIReturnnull();
$demo->typenullReturnnull();



?>