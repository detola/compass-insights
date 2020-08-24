<?php

function presentPrice($price)
{
    return money_format('NGN%i', $price/100);
}

