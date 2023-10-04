<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminPageModel extends Model
{
    protected $table = 'admin_page'; // Nome da tabela no banco de dados
    protected $primaryKey = 'id'; // Chave primária da tabela
    public $timestamps = true; // Define se a tabela tem colunas created_at e updated_at
    
    // Outros campos da tabela podem ser definidos aqui
    protected $fillable = [
        'Page',
        // Adicione outros campos conforme necessário
    ];
    use HasFactory;
}

