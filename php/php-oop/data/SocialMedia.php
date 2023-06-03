<?php

class SocialMedia {
    public string $name;
}

class Facebook extends SocialMedia {
    final public function login(string $username, string $password): void {

    }
}

class FakeFacebook extends Facebook {
    // akan error karena final function tidak bisa di override
    // public function login(string $username, string $password): void {

    // }
}





?>