
<?php
function console_log($data, $add_script_tags = false) {
    $command = 'console.log('. json_encode($data, JSON_HEX_TAG).');';
    if ($add_script_tags) {
        $command = '<script>'. $command . '</script>';
    }
    echo $command;
}?>