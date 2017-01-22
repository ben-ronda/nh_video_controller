<?php
    require_once __DIR__."/src/Commands.php";
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TLC South Control</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <form method="post">
      <div class="interface row" id="grad">
        <div id="system_controls" class="col-sm-6">
          <h3>System Controls</h3>

          <div id="controls">
            <div id="projector_control">

              <div id="projector_toggle" class="power">
                <h4>Projector</h4>
                <a href="?power_on_projector=true" class="btn btn-default power-buttons">
                  <span class="glyphicon glyphicon-off" aria-hidden="true"> On</span>
                  <?php turnPjOn(); ?> <!-- Command -->
                </a>

                <a href="?power_off_projector=true" class="btn btn-default power-buttons">
                  <span class="glyphicon glyphicon-off" aria-hidden="true"> Off</span>
                  <?php turnPjOff(); ?> <!-- Command -->
                </a>
              </div>
            </div>

            <div id="sound_control">
              <h4>Sound</h4>

              <div id="sound_toggle" class="power">
                <a href="?power_on_sound=true" class="btn btn-default power-buttons">
                  <span class="glyphicon glyphicon-off " aria-hidden="true"> On</span>
                  <?php soundSysOn(); ?> <!-- Command -->
                </a>

                <a href="?power_off_sound=true" class="btn btn-default power-buttons">
                  <span class="glyphicon glyphicon-off" aria-hidden="true"> Off</span>
                  <?php soundSysOff(); ?> <!-- Command -->
                </a>

              </div>
            </div>
          </div>

        </div> <!-- end system_controls -->

        <div id="input_selection" class="col-sm-6">
          <h3>Input Selector</h3>
          <div id="inputs">
            <h4>Inputs</h4>
            <div class="input_button">
              <a href="?dvd=true" class="btn btn-default">DVD</a>
              <?php swIn0(); ?> <!-- Command -->
            </div>

            <div class="input_button">
              <a href="?hdmi_1=true" class="btn btn-default">Front HDMI</a>
              <?php swIn1(); ?> <!-- Command -->
            </div>

            <div class="input_button">
              <a href="?hdmi_2=true" class="btn btn-default">Back HDMI</a>
              <?php swIn2(); ?> <!-- Command -->
            </div>

            <div class="input_button">
              <a href="?roku=true" class="btn btn-default">Start Roku</a>
              <?php swIn3(); ?> <!-- Command -->
            </div>

            <div class="input_button">
              <a href="?black=true" class="btn btn-default">Black</a>
              <?php turnPjBlack(); ?>
            </div>
          </div>

        </div> <!-- end input_selection -->

      </div> <!-- end interface -->
    </form>

  </body>
</html>
