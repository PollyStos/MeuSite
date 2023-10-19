<?php

namespace App\Models\admin;
use Illuminate\Database\Eloquent\Model;

class adminPageSection extends Model
{
    // Nome da tabela associada ao modelo
    protected $table = 'admin_page_sections';
    // Especifica o nome da tabela correspondente no banco de dados.

    protected $fillable = [
        'page_id',
        'section_name',
        'URL',
        'CheckMenu',
    ];

    // Relacionamento com a tabela 'pages'
    public function page()
    {
        return $this->belongsTo(Page::class, 'page_id');
    }
}
