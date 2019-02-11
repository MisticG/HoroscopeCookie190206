<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['birthDate'])) {
        $user = array();
        $user['firstName'] = $_POST['firstName'];
        $user['lastName'] = $_POST['lastName'];
        $user['birthDate'] = $_POST['birthDate'];

        setcookie('user', serialize($user), time() + (86400 * 7), "/");
    }
}

class person {
    protected $firstName;
    protected $lastName;
    protected $birthDate;

    function __construct($firstName, $lastName, $birthDate) {
        $this->name = $firstName;
        $this->lastName = $lastName;
        $this->birthDate = $birthDate;
    }
}


?>


