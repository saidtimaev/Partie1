<?php
$formateurs = [
    "stephane" => "mulhouse",
    "virgile" => "strasbourg",
    "micka" => "strasbourg",
    "dominique" => "colmar"
];


foreach($formateurs as $prenom => $ville) {
    echo ucfirst($prenom)." habite ".mb_strtoupper($ville)."<br>";
}

?>


