<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Prefix;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoice = Invoice::select('*')->get();

        return view('invoice.dashboard', ['invoice'=>$invoice]);
    }

    public function add()
    {
        $prefix = Prefix::all();
        return view('invoice.add', compact('prefix'));
    }

    public function invoiceadd(Request $request)
    {
        $invoice = New Invoice;

        $invoice->customer = $request->customer;
        $invoice->total = $request->total;
        $invoice->series_id = $request->series_id;

        $invoice->save();

        return redirect('/invoice');
    }

    public function edit($id)
    {
        $prefix = Prefix::all();
        $invoice = Invoice::findOrFail($id);

        return 
        view('invoice.edit', compact('invoice'), compact('prefix'));
    }

    public function update(Request $request, $id)
{
    

    $invoice = Invoice::find($id);
    $invoice->customer = $request->customer;
    $invoice->total = $request->total;
    $invoice->series_id = $request->series_id;
    if($invoice->save()) {
        return redirect('/invoice');
    } else {
        return redirect()->back()->with('message', 'Gagal memperbarui data');
    }
}

public function destroy($id)
    {
        $invoice = Invoice::findOrFail($id);
        $invoice->delete();

        return redirect ('/invoice');
    }
}
