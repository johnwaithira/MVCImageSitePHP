<?php

use Waithirajon\ImageUploadSiteMvc\app\route\Route;

Route::resources('layouts.head');
Route::resources('layouts.navigation');
?>
<div class="m-t-30">
    <div class="w-p-90 m-a p-30 box-shadow1">
        <div class="p-20">
            <div class="text-center">
                <p class="f-s-60">
                    404!
                </p>
                <p class="c_red f-s-20">Page not found</p>
            </div>
        </div>
    </div>
</div>

<?php
Route::resources('layouts.footer');
?>