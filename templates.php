<?php
require_once "poulet.php";
$loginForm = "    <form action='' method='post'>
        <div>
            <input type='text' placeholder='username' name='username' id='' class='form-control'>
        </div>
        <div>
            <input type='password' placeholder='password' name='password' id='' class='form-control'>
        </div>
        <div>
            <button type='submit' class='btn btn-success'>log in</button>
        </div>

    </form>";


function afficheUnPlat()
{
    foreach ($platsPoulet as $genre => $value) {
        echo "le $platsPoulet est $genre etant $value";
    }

    return $platDansUnTemplate;
}

