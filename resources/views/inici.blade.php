<strong>Database Connected: </strong>
<?php
    try {
        \DB::connection()->getPDO();
        echo \DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        echo 'No hi ha connexió';
    }
?>