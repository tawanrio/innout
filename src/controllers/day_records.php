<?php

    session_start();
    requireValidSession();

    $date = (new DateTime())->getTimeStamp();
    $today = strftime('%d de %B de %Y', $date);
 
    loadTempalteView('day_records', ['today' => $today]);