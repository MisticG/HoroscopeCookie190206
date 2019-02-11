<?php

$user = array();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['birthDate'])) {
        $user[0] = $_POST['firstName'];
        $user[1] = $_POST['lastName'];
        $user[2] = $_POST['birthDate'];

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

        $month = substr($birthDate, 2, 2);
        $day = substr($birthDate, 4);

        if(($month == 12 && $day >= 22) || ($month == 1 && $day <= 19)) {
            echo "Stenbocken";
        }
        if(($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) {
            echo "Vattumannen";
        }
        if(($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) {
            echo "Fiskarna";
        }
        if(($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) {
            echo "Väduren";
        }
        if(($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) {
            echo "Oxen";
        }
        if(($month == 5 && $day >= 21) || ($month == 6 && $day <= 21)) {
            echo "Tvillingarna";
        }
        if(($month == 6 && $day >= 22) || ($month == 7 && $day <= 22)) {
            echo "Kräftan";
        }
        if(($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) {
            echo "Lejonet";
        }
        if(($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) {
            echo "Jungfrun";
        }
        if(($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) {
            echo "Vågen";
        }
        if(($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) {
            echo "Skorpionen";
        }
        if(($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) {
            echo "Skytten";
        }
        
    }

}

$personOne = new person($user[0], $user[1], $user[2]);

?>


