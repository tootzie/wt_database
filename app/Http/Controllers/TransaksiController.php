<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MstCustomer;
use App\Models\MstProduct;
use App\Models\TxtHdrModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index(Request $request)
    {
        //User input DocNo & Field akan otomatis terisi dengan informasi dokumen
        $data['docno'] = $request->get('docno');
        $document = DB::table('trxhdr')
            ->join('mstcustomer', 'trxhdr.custcode', '=', 'mstcustomer.custcode')
            ->select('trxhdr.*', 'mstcustomer.custname')
            ->where('trxhdr.docno', '=', $data['docno'])
            ->first();
        // dd($document);
        
        //Cek apakah dokumen ada di database
        if($document != null) {
            $data['docno'] = $document->docno;
            $data['custcode'] = $document->custcode;
            $data['custname'] = $document->custname;
            $data['notes'] = $document->notes;
            $data['date'] = $document->docdate;
        } else {
            $data['custcode'] = '';
            $data['custname'] = '';
            $data['notes'] = '';
            $data['date'] = '';
        }

        //User input CustCode & Field akan otomatis terisi dengan custname
        // $data['custcode'] = $request->get('custcode');
        // $document = MstCustomer::


        //User input Product Code & Field akan otomatis terisi dengan informasi produk
        $data['prodcode'] = $request->get('prodcode');
        $document = DB::table('mstproduct')
        ->join('mstproductprice', 'mstproduct.prodcode', '=', 'mstproductprice.prodcode')
        ->select('mstproduct.*', 'mstproductprice.unitprice')
        ->where('mstproduct.prodcode', '=', $data['prodcode'])
        ->first();
        
        //Cek apakah produk ada di database
        if($document != null) {
            //Masukkan informasi ProdName, UnitPrice, Content, UMBig, UMSmall
            $data['prodcode'] = $document->prodcode;
            $data['prodname'] = $document->prodname;
            $data['unitprice'] = $document->unitprice;
            $data['content'] = $document->content;
            $data['qtybig'] = $document->umbig;
            $data['qtysmall'] = $document->umsmall;
        } else {
            $data['prodcode'] = '';
            $data['prodname'] ='';
            $data['unitprice'] = '';
            $data['content'] = '';
            $data['qtybig'] = '';
            $data['qtysmall'] = '';
            // dd($document_data);
        }



        return view('transaksi.index', $data);
    }
}
