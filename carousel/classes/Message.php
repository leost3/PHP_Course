<?php
class Message {
    public static $Error    = 0;
    public static $Success  = 1;
    public static $Warning  = 2;
    public static $Info     = 3;

    public static function Show($message, $type) {
        if (!empty($message)) {
            switch($type) {
                case 0: echo
                '<div class="alert alert-danger alert-dismissible fade show">
                    <strong>Error! </strong><br>
                ';
                break;
                case 1: echo
                '<div class="alert alert-success alert-dismissible fade show">
                    <strong>Success! </strong><br>
                ';
                case 2: echo
                '<div class="alert alert-warning alert-dismissible fade show">
                    <strong>Warning! </strong><br>
                ';
                break;
                default: echo
                '<div class="alert alert-info alert-dismissible fade show">
                    <strong>Warning! </strong><br>
                ';
                break;
            }
            echo $message;
            echo '<button type="button" class="close" data-dismiss="alert">&times</button>';
            echo '</div>';
        }
    }
}