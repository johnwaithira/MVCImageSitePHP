<?php

use Waithirajon\ImageUploadSiteMvc\app\route\Route;

Route::resources('layouts.head')
?>
<div class="body">
    {{ content }}
</div>
<?php
Route::resources('layouts.footer')
?>


