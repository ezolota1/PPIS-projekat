<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\CovidData;
use Dompdf\Dompdf;
use Dompdf\Options;
use Log;

class CovidDataController extends Controller
{
    //
    public function index()
    {
        $covidData = CovidData::all();
        return view('covid.index', compact('covidData'));
    }

    public function create()
    {
        return view('covid.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'SPOL' => 'required|in:0,1',
            'LE_WBC' => 'required|numeric|min:0',
            'Limf' => 'required|numeric|min:0',
            'Mid' => 'required|numeric|min:0',
            'Gran' => 'required|numeric|min:0',
            'HGB' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $covidData = new CovidData([
            'SPOL' => $request->input('SPOL'),
            'LE_WBC' => $request->input('LE_WBC'),
            'Limf' => $request->input('Limf'),
            'Mid' => $request->input('Mid'),
            'Gran' => $request->input('Gran'),
            'HGB' => $request->input('HGB'),
        ]);

        $covidData->save();

        return redirect()->route('covid.create')->with('success', 'Covid-19 record added successfully.');
    }

    public function edit($id)
    {
        $covidData = CovidData::find($id);
        return view('covid.edit', compact('covidData'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'SPOL' => 'required|numeric|in:0,1',
            'LE_WBC' => 'required|numeric|min:0',
            'Limf' => 'required|numeric|min:0',
            'Mid' => 'required|numeric|min:0',
            'Gran' => 'required|numeric|min:0',
            'HGB' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput($request->input());
            //return back()->withErrors($validator);
        }

        $covidData = CovidData::findOrFail($id);

        $covidData->update([
            'SPOL' => $request->input('SPOL'),
            'LE_WBC' => $request->input('LE_WBC'),
            'Limf' => $request->input('Limf'),
            'Mid' => $request->input('Mid'),
            'Gran' => $request->input('Gran'),
            'HGB' => $request->input('HGB'),
        ]);

        return redirect()->route('home')->with('success', 'Covid-19 record updated successfully.');
    }

    public function editFinalResult(Request $request, $id)
    {
        $covidData = CovidData::find($id);
        return view('covid.editFinalResult', compact('covidData'));
    }

    
    public function updateFinalResult(Request $request, $id)
    {
        $covidData = CovidData::findOrFail($id);

        $covidData->update([
            'FinalResult' => $request->input('final_result'),
        ]);

        return redirect()->route('home')->with('success', 'Covid-19 final result updated successfully.');
    }

    public function generatePdf($id)
    {
        $data = CovidData::findOrFail($id);

        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        $dompdf = new Dompdf($options);

     
        $html = view('covid.covidDataPdf', compact('data'))->render();
        $dompdf->loadHtml($html);
        $dompdf->render();

        return $dompdf->stream('covid_data_' . $id . '.pdf');
    }

   
    
    public function generatePdfGlobal(){
             
        $data = CovidData::all();
        return view('covid.covidDataPdfGlobal', compact('data'));
    }
  
    
}
