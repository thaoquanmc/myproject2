<div>
<!--    <h2>--><?//= $lang["header"]; ?><!--</h2>-->
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light myMenu border-bottom">
    <ul class="navbar-nav mr-0 ml-auto">
        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-home"></i> <?= $lang["menu_home"] ?></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-address-card"></i> <?= $lang["menu_about"] ?></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-hotel"></i> <?= $lang["menu_room"] ?></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-concierge-bell"></i> <?= $lang["menu_service"] ?></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-search-location"></i> <?= $lang["menu_check_booking"] ?></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-id-card-alt"></i> <?= $lang["menu_contact"] ?></a></li>
        <li class="nav-item border-radius-5 ml-5 mr-5 btn-booking"><a class="nav-link" href="#"><i class="fas fa-file-signature"></i> <?= $lang["menu_book_now"] ?></a></li>
        <li class="nav-item m-auto"><img class="myflag box-shadow" id="changeLanguage" src="/public/img/<?php
if(isset($_SESSION["lang"])){
    if($_SESSION["lang"]=="en"){
        echo "vi";
    } else{
        echo "en";
    }
} else{
    echo "en";
}
            ?>.png">
        </li>
    </ul>
</nav>