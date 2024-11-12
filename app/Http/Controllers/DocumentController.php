<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\User;
use App\Traits\CustomLogTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\TryCatch;

class DocumentController extends Controller
{
    use CustomLogTrait;

    public function index()
    {
        $id_user  = Auth::id();
        $documents = Document::where('user_id', $id_user)->get();
        return view('user.upload_document', compact('documents'));
    }

    public function store(Request $request)
    {
        try {
            $id_user  = Auth::id();
            $descript = $request->get('dropdown_options');
           
            if ($request->hasFile('document_file')) {
                $document = $request->file('document_file')->store('user', 'public');
                $data['document_name'] = $document;
                $data['document_description'] = $descript;
            }
            $data['user_id'] = $id_user;
            Document::create($data);
            $documents = Document::where('user_id', $id_user)->get();
            return view('user.upload_document', compact('documents'));
        } catch (Exception $e) {
            $this->errorCatch($e->getMessage(), auth()->user()->id);
            flash($e->getMessage())->error();
            return redirect()->route('document.index');
        }
    }
}
