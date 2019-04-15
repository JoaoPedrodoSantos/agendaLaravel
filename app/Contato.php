<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $fillable =[
        'saudacao', 'nome', 'telefone', 'email', 'data_nascimento', 'avatar', 'nota'
    ];

    //Acessor
    public function getAvatarImageAttribute($value){
        return $this->avatar == null ? asset('images/null.png') : asset($this->avatar);
    }

    public function getAvatarFilenameAtrribute($value){
        return substr($this->avatar,30,strlen($this->avatar));
    }

    public function getDataNascimentoAttribute($value){
        return dateFormatDatabaseScreen($value,'screen');
    }

    //Mutador
    public function setDataNascimentoAttribute($value){
        $this->attributes['data_nascimento'] = dateFormatDatabaseScreen($value);
    }

    public function setAvatarAttribute($value){
        $filename = substr(md5(rand(100000, 999999)),0,5) .'_'. $value->getClientOriginalName();
        $filepath = 'public/uploads/'.date('Y').'/'.date('m').'/';
        if($value->isValid()){
            $path = $value->storeAs($filepath, $filename);
        }
        $this->attributes['avatar'] = str_replace('public', 'storage', $filepath) . $filename;
    }

    public static function indexLetra($letra){
        return static::where('nome', 'LIKE', $letra . '%')->get();
    }
}