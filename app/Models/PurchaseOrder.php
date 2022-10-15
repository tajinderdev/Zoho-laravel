<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'PurchaseOrderID',
        'PurchaseOrderNumber',
        'DateString',
        'Date',
        'DeliveryDateString',
        'DeliveryDate',
        'DeliveryAddress',
        'DeliveryInstructions',
        'IsDiscounted',
        'Reference',
        'Type',
        'CurrencyRate',
        'CurrencyCode',
        'Contact',
        'Phones',
        'UpdatedDateUTC',
        'DefaultCurrency',
        'BrandingThemeID',
        'Status',
        'LineAmountTypes',
        'LineItems',
        'SubTotal',
        'TotalTax',
        'Total',
    ];
}
