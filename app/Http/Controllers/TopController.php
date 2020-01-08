<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Weidner\Goutte\GoutteFacade as GoutteFacade;
class TopController extends Controller
{
    public function top(){
        return view('index');
    }
    public function test(){
        // 画像取得
        $goutte = GoutteFacade::request('GET', 'https://www.pokemon.co.jp/ex/sword_shield/pokemon/');
        $img = array();
        $goutte->filter(".c-block-list-item__inner img")->each(function ($node) use (&$img) {
            $img[] = $node->attr('src');
        });
        var_dump($img);
    }

}
