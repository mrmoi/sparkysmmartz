<?php

function set_active($path, $active = 'custom_active')
{
    return Request::is($path) ? $active : '';
}