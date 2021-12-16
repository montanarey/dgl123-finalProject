<?php
/*
DGL123 Introduction to PHP
Final Project
Author: Montana Pistell n0145744
Last Modified: 
*/

// Displays character data as html li block
function displayCharacters($image_url, $first_name, $last_name, $age, $occupation, $voiced_by)
{
    echo ("
    <li class='characters__itemContainer'>
        <div class='characters__item'>
            <img src=$image_url alt='$first_name' class='characters__image'>
            <div class='characters__info'>
                <h3 class='characters__name'>$first_name $last_name</h3>
                <div class='characters__age characters__attribute'><b>Age:</b> $age</div>
                <div class='characters__occupation characters__attribute'><b>Occupation:</b> $occupation</div>
                <div class='characters__voicedBy characters__attribute'><b>Voiced by:</b> $voiced_by</div>
            </div>
        </div>
    </li>
    ");
}
