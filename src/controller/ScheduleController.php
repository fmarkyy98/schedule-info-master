<?php
    require_once('../model/DummyScheduleService.php');
    require_once('../model/TextFileScheduleService.php');
    require_once('../model/BKKScheduleService.php');
    require_once('../model/BKKLiveScheduleService.php');

    if(!isset($_GET['stop']) || !preg_match('/^[0-9A-Z]*$/',$_GET['stop'])) {
        $stop = 1;
    } else {
        $stop = $_GET['stop'];
    }

    $scheduleService = new BKKLiveScheduleService();
    $departures = $scheduleService->getDepartures($stop);
    $stopName = $scheduleService->getStopName($stop);

    require('../view/ScheduleView.php');
?>

