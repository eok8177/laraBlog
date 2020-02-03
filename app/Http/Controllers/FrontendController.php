<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \App\Page;
use \App\Block;

class FrontendController extends Controller
{
    public function index()
    {
        $page = Page::where('slug', 'index')->first();

        return view('page', [
            'page' => $page,
            'blocks' =>$this->generateBlocks($page->text)
        ]);
    }

    public function page($slug)
    {
        $page = Page::where('slug', $slug)->first();

        if (!$page) {
            return redirect()->route('front.index');
        }

        return view('page', [
            'page' => $page,
            'blocks' => $this->generateBlocks($page->text)
        ]);
    }

    private function generateBlocks($text)
    {
        preg_match_all("/\[([^\]]*)\]/", $text, $matches);
        $blocks = [];

        foreach ($matches[1] as $block) {
            $blocks[] = Block::where('slug',$block)->first();
        }

        return $blocks;
    }

}
