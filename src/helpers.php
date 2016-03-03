<?php

if (!function_exists('lorem')) {
    function lorem($paragraphs = null)
    {
        if (is_null($paragraphs)) {
            return app('lorem');
        }

        return app('lorem')->html($paragraphs);
    }
}
