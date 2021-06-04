<?php
session_start();
    echo (session('user'));
    echo session('email');
    echo session('phone_number');
