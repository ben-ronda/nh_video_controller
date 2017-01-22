<?php

    // Projector Controls

    function turnPjOn() {
        if($_GET['power_on_projector']){
            exec('sudo -u root -S bash /bin/turn-pj-on');
        }
    }

    function turnPjOff() {
        if($_GET['power_off_projector']{
            exec('sudo -u root -S bash /bin/turn-pj-off');
        }
    }

    // Sound System Controls

    function soundSysOn() {
        if($_GET['power_on_sound']){
            exec('sudo -u root -S bash /bin/soundsys-on');
        }
    }

    function soundSysOff() {
        if($_GET['power_off_sound']){
            exec('sudo -u root -S bash /bin/soundsys-off');
        }
    }

    // Video Switcher Controls

    function swIn0() {
        if($_GET['dvd']){
            exec('sudo -u root -S bash /bin/sw-in0');
        }
    }

    function swIn1() {
        if($_GET['hdmi_1']){
            exec('sudo -u root -S bash /bin/sw-in1');
        }
    }

    function swIn2() {
        if($_GET['hdmi_2']){
            exec('sudo -u root -S bash /bin/sw-in2');
        }
    }

    function swIn3() {
        if($_GET['roku']) {
            exec('sudo -u root -S bash /bin/sw-in3');
        }
    }

    // Blackout

    function turnPjBlack() {
        if ($_GET['black']) {
            exec('sudo -u root -S bash /bin/turn-pj-black');
        }
    }
?>
