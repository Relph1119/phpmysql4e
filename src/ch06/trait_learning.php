<?php
/**
 * Created by PhpStorm.
 * User: Hurf
 * Date: 2018/7/19
 * Time: 20:45
 */

trait fileLogger {
    public function logmessage ($message, $level='DEBUG') {
        // write $message to a log file
    }
}

trait sysLogger {
    public function logmessage ($message, $level='ERROR') {
        // write $message to the syslog
    }
}

class fileStorage {
    use fileLogger, sysLogger {
        fileLogger::logmessage insteadof sysLogger;
        sysLogger::logmessage as private logsysmessage;
    }

    function store($data) {
        //...
        $message = "";
        $this->logmessage($message);
        $this->logsysmessage($message);
    }
}

?>