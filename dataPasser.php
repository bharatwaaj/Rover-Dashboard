<?php

function dataPasser($name, $value)
{
    if ($name != null && $value != null) {
        ?>

        <input type="hidden" name="<?php echo $name; ?>" value="<?php echo $value; ?>">

        <?php
    }
}

?>
