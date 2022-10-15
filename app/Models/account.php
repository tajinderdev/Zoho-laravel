<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'AccountID',
        'Code',
        'Name',
        'Status',
        'Type',
        'TaxType',
        'EnablePaymentsToAccount',
        'BankAccountNumber',
        'BankAccountType',
        'CurrencyCode',
        'ShowInExpenseClaims',
        'Description',
        'ReportingCode',
        'ReportingCodeName'
    ];
}
