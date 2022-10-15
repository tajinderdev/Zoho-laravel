<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [

        'Contact',
        'Date',
        'DueDate',
        'DateString',
        'DueDateString',
        'Status',
        'LineAmountTypes',
        'LineItems',
        'SubTotal',
        'TotalTax',
        'Total',
        'UpdatedDateUTC',
        'Type',
        'InvoiceID',
        'InvoiceNumber',
        'AmountDue',
        'AmountPaid',
        'AmountCredited',
        'CurrencyRate'
        
        ];
}
