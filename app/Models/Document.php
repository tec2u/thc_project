<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $table = 'user_documents';

    protected $fillable = [
        'user_id',
        'document_name',
        'document_description',
        'document_approved'
    ];

    /**
    * Relacionamento de Tabelas
    */
    #region relacionamento
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    #endregion
}
