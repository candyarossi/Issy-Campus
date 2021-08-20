<?php

namespace models;

class Red {

    private $red;
    private $user;
    private $link;
   

    public function __construct($red_red, $user_red, $link_red) {

            $this->red = $red_red;
            $this->user = $user_red;
            $this->link = $link_red;
    

    }

    public function setRed($red) {
            $this->red = $red;
    }

    public function getRed() {
            return $this->red;
    }

    public function setUser($user) {
        $this->user = $user;
}

public function getUser() {
        return $this->user;
}

public function setLink($link) {
    $this->link = $link;
}

public function getLink() {
    return $this->link;
}

}
?>