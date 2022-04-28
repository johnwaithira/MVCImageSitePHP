<?php

namespace Waithirajon\ImageUploadSiteMvc\app\core\Templates;

class Form
{
    public static function begin($action, $method)
    {
        echo sprintf('<form  action="%s" method = "%s" class=" p-10 m-t-20" enctype="multipart/form-data">', $action, $method);
        return new Form();
    }

    public static function end()
    {
        echo "
        <script>
            if(window.history.replaceState)
            {
                window.history.replaceState(null, null, window.location.href)
            }
        
        </script>
        </form>";
    }

    public static function field($attribute)
    {
        return new Fields($attribute);
    }
}