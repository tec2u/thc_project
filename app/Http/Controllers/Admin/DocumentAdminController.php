<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Traits\CustomLogTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocumentAdminController extends Controller
{
    use CustomLogTrait;

    public function index()
    {
        $documents = Document::orderBy('id', 'desc')->paginate(9);
        return view('admin.document.list', compact('documents'));
    }

    public function edit($id)
    {
        $document = Document::find($id);
        return view('admin.document.edit', compact('document'));
    }

    public function update(Request $request, $id)
    {
        try {
            $document = Document::find($id);
            $data = $request->only('document_approved');
            $document->update($data);
            return redirect()->route('admin.document.index');
        } catch (Exception $e) {
            $this->errorCatch($e->getMessage(), auth()->user()->id);
            flash($e->getMessage())->error();
            return redirect()->route('admin.document.index');
        }
    }
}
