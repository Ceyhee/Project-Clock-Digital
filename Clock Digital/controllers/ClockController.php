<?php
require_once './models/ClockModel.php';

class ClockController {
    private $clockModel;

    public function __construct() {
        $this->clockModel = new ClockModel();
    }

    public function updateClock() {
        return $this->clockModel->getCurrentTime();
    }
}
?>
