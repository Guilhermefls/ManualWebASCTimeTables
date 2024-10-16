<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;

class Post extends \TCG\Voyager\Models\Post
{
    protected $table = 'posts';
    /**
     * Estado.
     */
    public const PUBLICADO = 'PUBLISHED';

    /**
     * escopo da query para só incluir páginas ativas.
     */
    public function scopePublicados(Builder $query)
    {
        return $query->where('status', '=', static::PUBLICADO);
    }

    public function save(array $options = [])
    {
        // Se nenhum autor tiver sido atribuído, atribua o id do usuário atual como autor do post
        if (!$this->author_id && Auth::user()) {
            $this->author_id = Auth::user()->getKey();
        }

        return parent::save();
    }

    public function getCriadoEmFormatadoAttribute($value)
    {
        return Carbon::parse($this->created_at)->format('d/m/Y H:i');
    }

    /**
     * Relacionamento pertence a (Muitos para Um)
     * usando Laravel
     */
    public function autor()
    {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }

    /**
     * mapear relacionamento tem-um/pertence-a-um
     * usando Voyager
     */
    public function categoria()
    {
        return $this->belongsTo(Category::class,'category_id', 'id');
    }
    public function getConteudo()
    {

        $texto=$this->body;
        $rota=route('postagens.instrucoes');
        if (mb_strpos($this->body, "cart&otilde;es avan&ccedil;ados") !== false) {
            $texto = str_replace("cart&otilde;es avan&ccedil;ados", "<a href='$rota'>cart&otilde;es avan&ccedil;ados</a>",$texto);

        }
        return $texto;
    }
}
