<?php
    require_once __DIR__ . '/Books.php';
    require_once __DIR__ . '/Customers.php';
    
    $book1 = new Books(9785267006323,"1984", "George Orwell",12) ;
    $customer1 = new Customers("1101", "Redwana", "Farbin", "s2012176116@ru.ac.bd");

    echo $book1->__toString();
    echo $customer1->__toString();

    echo "</br>".$book1->getCopy();
    echo "</br>".$book1->addCopy(5);

?>