<?php
include 'interfaceI.php';

class C implements I {
    public function f() {
        echo "Method from interface I implemented in class C\n";
    }
}