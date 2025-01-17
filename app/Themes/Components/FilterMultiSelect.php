<?php

namespace App\Themes\Components;

class FilterMultiSelect
{
    public string $view = '';

    public string $baseClass = '';

    public string $baseStyle = '';

    public function base(string $attrClass = '', string $attrStyle = ''): FilterMultiSelect
    {
        $this->baseClass = $attrClass;

        $this->baseStyle = $attrStyle;

        return $this;
    }

    public function view(string $view): FilterMultiSelect
    {
        $this->view = $view;

        return $this;
    }
}
