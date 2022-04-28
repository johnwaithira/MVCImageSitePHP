<?php

namespace Waithirajon\ImageUploadSiteMvc\app\core\Templates;

class Fields
{
    public const TEXT = "text";
    public const PASSWORD = "password";
    public const EMAIL = "email";
    public const NUMBER = "number";
    public const FILE = "file";

    public const MULTIPLE = "multiple";
    public const HIDDEN = "hidden";

    public string $multiple;
    public string $hidden;
    public string $type;
    public string $placeholder;
    public string $id;
    public string $value;

    public string $attribute;
    public function __construct(string $attribute)
    {
        $this->attribute = $attribute;
        $this->type = self::TEXT;
        $this->multiple = "";
        $this->hidden = "";
        $this->placeholder = $this->attribute;
        $this->id = $this->attribute;
        $this->value = "";
    }

    public function __toString(): string
    {
        return sprintf(
            '
             <div class="b-one p-5-15 m-t-4 ">
                <input type="%s" name="%s" id="%s" placeholder="%s" %s %s %s
                    class="f-s-17 b-n outline-none p-10-15 w-p-100">
            </div>
            ',
            $this->type,
            $this->attribute,
            str_replace(
                '[]',
                '',
                $this->id
            ),

            str_replace(
                $this->placeholder[0],
                strtoupper($this->placeholder[0]),
                $this->placeholder
            ),
            $this->value,
            $this->multiple,
            $this->hidden
        );
    }

    public function file()
    {
        $this->type = self::FILE;
        return $this;
    }

    public function number()
    {
        $this->type = self::NUMBER;
        return $this;
    }

    public function email()
    {
        $this->type = self::EMAIL;
        return $this;
    }
    public function password()
    {
        $this->type = self::PASSWORD;
        return $this;
    }

    public function multiple()
    {
        $this->multiple = self::MULTIPLE;
        return $this;
    }

    public function hidden()
    {
        $this->multiple = self::HIDDEN;
        return $this;
    }

    public function placeholder($customPlacehoder)
    {
        $this->placeholder = $customPlacehoder;
        return $this;
    }

    public function id($string)
    {
        $this->id = $string;
        return $this;
    }
    public function value($string)
    {
        $this->value = $string;
        return $this;
    }
}