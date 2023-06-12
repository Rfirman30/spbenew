<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\QuestionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class TanyaJawabController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|string',
            'subject' => 'required|string',
            'question' => 'required'
        ]);

        QuestionModel::create($request->all());

        return redirect()->back()->with('success', 'Sukses mengirim pesan');
    }

    public function index()
    {
        $data = QuestionModel::with('answer')->get();
        return view('admin.question.index', compact('data'));
    }

    function replyMessage($id)
    {
        $data = QuestionModel::find(Crypt::decrypt($id));
        return view('admin.question.reply', compact('data'));
    }

    function storeMessage($id, Request $request)
    {
        $request->validate([
            'answer' => "required",
        ]);
        $data = QuestionModel::find(Crypt::decrypt($id));
        $data->answer()->create([
            'answer' => $request->answer
        ]);

        return redirect()->route('question.index');
    }

    function viewMessage($id)
    {
        $data = QuestionModel::find(Crypt::decrypt($id));
        return view('admin.question.view', compact('data'));
    }
}
