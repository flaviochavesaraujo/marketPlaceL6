<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function store()
    {
        return $this->hasOne(Store::class);
    }
}










// 1:1 - Um pra um, (Usuário e Loja) - O usuário pode ter apenas 1 loja e uma loja apenas 1 usuário | hasOne belegongsTo

// 1:N - Um pra muitos - (Loja e Produtos) - uma loja pode ter vários produtos, mas o produto só pode estar em 1 loja | hasMany e belongsto

// N:N - Muitos pra muitos - (Produto e Categoria) uma categoria pode ter muitos produtos e um produto pode estar contido em muitas categorias | belongsToMany
