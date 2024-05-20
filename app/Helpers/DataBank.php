<?php
if (!function_exists('getProductName')) {
    function getProductName($product_id): string
    {
        return match ($product_id) {
            1 => 'Active',
            2 => 'Terminated',
            3 => 'Resigned',
            4 => 'Suspend',
            default => 'Employee Status'
        };
    }
}