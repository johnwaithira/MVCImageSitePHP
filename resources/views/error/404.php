<?php

use Waithirajon\ImageUploadSiteMvc\app\core\Templates\Form;
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

                <div class="p-10-0">
                    <i class="f-s-20 "><?php echo str_replace('index.php/', '' , $_SERVER['PHP_SELF'])?></i>
                </div>
                <p>Broken link ?
                    <?php $form = Form::begin('brokenlink', 'post') ?>
                        <?php echo $form::field('brokenlink')->value(str_replace('index.php/', '' , $_SERVER['PHP_SELF']));?>
                    <?php $form::end();?>
                      <button class="b-one p-10-15 m-l-20 bg-inherit">
                          Report
                      </button>
                <p>
            </div>
        </div>
    </div>
</div>

<?php
Route::resources('layouts.footer');
?>