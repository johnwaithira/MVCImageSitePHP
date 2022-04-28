<?php

use Waithirajon\ImageUploadSiteMvc\app\core\Templates\Form;
?>
<h1>Home</h1>
<div class="body">
    <div class="form m-20">
        <div class="form-box col-4 col-s-8 m-a">
            <div class="p-20 box-shadow1">
                <div class="logo-box w-p-100 text-center">
                    <h1>MVC Image Uploader</h1>
                </div>

               <div class="p-10-20">
                   <div>
                       <?php if (!empty($message)) {
                           echo $message;
                       } ?>
                   </div>
               </div>
                <?php $form = Form::begin('/upload','post');?>
                <?php echo $form::field(
                    'images[]')
                    ->placeholder('your name')
                    ->file()
                    ->id('imageupload')
                ;?>
                <div class="btn p-t-30">
                    <button id="btnupload" type="submit" class="p-15-25 b-one bg-inherit">Upload</button>
                </div>

                <?php $form::end();?>
            </div>
        </div>
    </div>
</div>