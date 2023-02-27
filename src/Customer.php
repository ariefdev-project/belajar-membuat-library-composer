<?php

namespace AriefDev\LibraryComposer;

class Customer
{

  public function __construct(private string $name)
  {
  }

  public function sayHello(string $name = "GUEST")
  {
    echo "Hello $name,my name is $this->name" . PHP_EOL;
  }
}
