<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminPageSection extends Model
{
    // protected $table = 'page_sections'; 
    // Especifica o nome da tabela correspondente no banco de dados.

    protected $fillable = ['page_id',
     'section_name',
     'URL',
     'CheckMenu'
    ]; // Define quais colunas podem ser preenchidas em massa.

    // public function page()
    // {
    //     return $this->belongsTo(Page::class, 'page_id'); // Define o relacionamento de pertencimento a uma página.
    // }
    use HasFactory;
}
