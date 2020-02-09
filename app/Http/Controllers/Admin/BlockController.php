<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Block;
use Illuminate\Http\Request;

class BlockController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search', false);

        $block = Block::orderBy('id','asc');

        if ($search) {
            $block->where('title','LIKE', '%'.$search.'%')
                ->orWhere('text','LIKE', '%'.$search.'%');
        }

        return view('admin.block.index', [
            'blocks' => $block->get(),
            'search' => $search
        ]);
    }

    public function create()
    {
        $block = new Block;
        $block->type = 'html';
        return view('admin.block.create', ['block' => $block]);
    }

    public function store(Request $request, Block $block)
    {
        $block = $block->create($request->all());

        return redirect()->route('admin.block.index')->with('success', 'Block created');
    }

    public function edit(Block $block)
    {
        return view('admin.block.edit', ['block' => $block]);
    }

    public function update(Request $request, Block $block)
    {
        $block->update($request->all());

        return redirect()->route('admin.block.edit', ['block' => $block->id])->with('success', 'Block updated');
    }

    public function destroy(Block $block)
    {
        $block->delete();

        return response()->json([
            'status' => 'success'
        ]);
    }

    public function setting(Block $block)
    {
        return view('admin.block.setting', ['block' => $block]);
    }
}
