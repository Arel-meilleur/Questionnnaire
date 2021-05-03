<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use App\Exports\QuestionExport;
use Maatwebsite\Excel\Facades\Excel;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('homes');
    }

    public function admin()
    {
        $data = Question::all();
        return view('admin',compact('data'));

    }

    public function importExportView()
    {
       return view('import');
    }

    public function export()
    {
        return Excel::download(new QuestionExport, 'question.xlsx');
    }

    public function exportCsv(Request $request)
{
   $fileName = 'questionnaire.csv';
   $data = Question::all();

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('question1          ', 'question2          ', 'question3          ', 'question4          ', 'question5          ','question6          ','question7          ','question8          ','question9          ','question10          ','question11          ','question12          '
        ,'question13          ','question14          ','question15          ','question16          ','question17          ','question18          ','question19          ','question20          ','question21          ','question22          ','question23          ','question24          ','question25          '
        ,'question26          ','question27          ','question18          ','question29          ','question30          ','question31          ','question32          ','question33          ','question34          ','question35          ','question36          '
        ,'question37          ','question38          ','question39          ','question40          ','question41          ','question42          ','question44          ','question45          ','question46          ','question47          ','question48          ','question49          '
        ,'question50          ','question51          ','question52          ','question53          ','question54          ','question55          ','question56          ','question57          ','question58          ','question59          ','question60          ','question61          ','question62          ','question63          '
    );

        $callback = function() use($data, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($data as $i=>$item) {
                // $row['#']  =  ++$i;
                $row['question1']  = $item->question1;
                $row['question2']  = $item->question2;
                $row['question3']  = $item->question3;
                $row['question4']  = $item->question4;
                $row['question5']  = $item->question5;
                $row['question6']  = $item->question6;
                $row['question7']  = $item->question7;
                $row['question8']  = $item->question8;
                $row['question9']  = $item->question9;
                $row['question10']  = $item->question10;
                $row['question11']  = $item->question11;
                $row['question12']  = $item->question12;
                $row['question13']  = $item->question13;
                $row['question14']  = $item->question14;
                $row['question15']  = $item->question15;
                $row['question16']  = $item->question16;
                $row['question17']  = $item->question17;
                $row['question18']  = $item->question18;
                $row['question19']  = $item->question19;
                $row['question20']  = $item->question20;
                $row['question22']  = $item->question21;
                $row['question23']  = $item->question23;
                $row['question24']  = $item->question24;
                $row['question25']  = $item->question25;
                $row['question26']  = $item->question26;
                $row['question27']  = $item->question27;
                $row['question28']  = $item->question28;
                $row['question29']  = $item->question29;
                $row['question30']  = $item->question30;
                $row['question31']  = $item->question32;
                $row['question33']  = $item->question33;
                $row['question34']  = $item->question34;
                $row['question35']  = $item->question35;
                $row['question36']  = $item->question36;
                $row['question37']  = $item->question37;
                $row['question38']  = $item->question38;
                $row['question39']  = $item->question39;
                $row['question40']  = $item->question40;
                $row['question41']  = $item->question41;
                $row['question42']  = $item->questio42;
                // $row['question43']  = $item->question43;
                $row['question44']  = $item->question44;
                $row['question45']  = $item->question45;
                $row['question46']  = $item->question46;
                $row['question47']  = $item->question47;
                $row['question48']  = $item->question48;
                $row['question49']  = $item->question49;
                $row['question50']  = $item->question50;
                $row['question51']  = $item->question51;
                $row['question52']  = $item->question52;
                $row['question53']  = $item->question53;
                $row['question54']  = $item->question54;
                $row['question55']  = $item->question55;
                $row['question56']  = $item->question56;
                $row['question57']  = $item->question57;
                $row['question58']  = $item->question58;
                $row['question59']  = $item->question59;
                $row['question60']  = $item->question60;
                $row['question61']  = $item->question61;
                $row['question62']  = $item->question62;
                $row['question63']  = $item->question63;
                $row['question64']  = $item->question64;


                fputcsv($file, array($row['question1'], $row['question2'], $row['question3'], $row['question4'], $row['question5'],$row['question6'],$row['question7'],$row['question8'],$row['question9']
                ,$row['question10'],$row['question11'],$row['question12'],
                $row['question13'],$row['question14'],$row['question15'],$row['question16'],$row['question17'],$row['question18'],$row['question19'],
                // $row['question20'],$row['question21'],$row['question22'],$row['question23'],$row['question24'], $row['question25'],$row['question26'],$row['question27'],$row['question28'],
                // $row['question29'],$row['question30'],$row['question31'],$row['question32'],$row['question33'],$row['question34'],
                $row['question35'],$row['question36'],$row['question37'],$row['question38'],$row['question39'],
                $row['question40'],$row['question41'],$row['question42'],$row['question44'],$row['question45'],$row['question46'],
                $row['question47'],$row['question48'],$row['question49'],$row['question50'],$row['question51'],$row['question52'],
                $row['question53'],$row['question54'],$row['question55'],$row['question56'],$row['question57'],$row['question58'],
                $row['question59'],$row['question60'],$row['question61'],$row['question62'],$row['question63'],$row['question64']
            ));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'question1' => 'required',
            'question2' => 'required',
            'question3' => 'required',
            'question4' => 'required',
            'question5' => 'required',
            'question6' => 'required',
            'question7' => 'required',
            'question8' => 'required',
            'question9' => 'required',
            'question10' => 'required',
            'question11' => 'required',
            'question12' => 'required',
            'question13' => 'required',
            'question14' => 'required',
            'question15' => 'required',
            // 'question16' => 'required', //sdsdqs
            'question19' => 'required',
            'question20' => 'required',
            'question21' => 'required',
            'question23' => 'required',
            'question24' => 'required',
            'question25' => 'required',
            'question26' => 'required',
            'question27' => 'required',
            'question28' => 'required',
            'question29' => 'required',
            'question30' => 'required',
            'question31' => 'required',
            // 'question32' => 'required',
            'question34' => 'required',
            'question35' => 'required',
            'question36' => 'required',
            'question37' => 'required',
            'question38' => 'required',
            'question39' => 'required',
            'question40' => 'required',
            'question45' => 'required',
            'question46' => 'required',
            'question47' => 'required',
            'question48' => 'required',
            'question49' => 'required',
            'question50' => 'required',
            'question51' => 'required',
            'question52' => 'required',
            // 'question53' => 'required',
            'question55' => 'required',
            'question56' => 'required',
            'question57' => 'required',
            'question58' => 'required',
            'question59' => 'required',
            'question60' => 'required',
            'question61' => 'required',
            'question62' => 'required',
            'question63' => 'required',
            'question64' => 'required',
        ], [
            'question1.required' => 'Ce champ est obligatoire!',
            'question2.required' => 'Ce champ est obligatoire!',
            'question3.required' => 'Ce champ est obligatoire!',
            'question4.required' => 'Ce champ est obligatoire!',
            'question5.required' => 'Ce champ est obligatoire!',
            'question6.required' => 'Ce champ est obligatoire!',
            'question7.required' => 'Ce champ est obligatoire!',
            'question8.required' => 'Ce champ est obligatoire!',
            'question9.required' => 'Ce champ est obligatoire!',
            'question10.required' => 'Ce champ est obligatoire!',
            'question11.required' => 'Ce champ est obligatoire!',
            'question12.required' => 'Ce champ est obligatoire!',
            'question13.required' => 'Ce champ est obligatoire!',
            'question14.required' => 'Ce champ est obligatoire!',
            'question15.required' => 'Ce champ est obligatoire!',
            // 'question16.required' => 'Ce champ est obligatoire!', //dsdfsd
            'question19.required' => 'Ce champ est obligatoire!',
            'question20.required' => 'Ce champ est obligatoire!',
            'question21.required' => 'Ce champ est obligatoire!',
            'question23.required' => 'Ce champ est obligatoire!',
            // // 'question22.required' => 'Ce champ est obligatoire!',
            'question24.required' => 'Ce champ est obligatoire!',
            'question25.required' => 'Ce champ est obligatoire!',
            'question26.required' => 'Ce champ est obligatoire!',
            'question27.required' => 'Ce champ est obligatoire!',
            'question28.required' => 'Ce champ est obligatoire!',
            'question29.required' => 'Ce champ est obligatoire!',
            'question30.required' => 'Ce champ est obligatoire!',
            'question31.required' => 'Ce champ est obligatoire!',
            // 'question32.required' => 'Ce champ est obligatoire!',
            'question34.required' => 'Ce champ est obligatoire!',
            'question35.required' => 'Ce champ est obligatoire!',
            'question36.required' => 'Ce champ est obligatoire!',
            'question37.required' => 'Ce champ est obligatoire!',
            'question38.required' => 'Ce champ est obligatoire!',
            'question39.required' => 'Ce champ est obligatoire!',
            'question40.required' => 'Ce champ est obligatoire!',
            'question45.required' => 'Ce champ est obligatoire!',
            'question46.required' => 'Ce champ est obligatoire!',
            'question47.required' => 'Ce champ est obligatoire!',
            'question48.required' => 'Ce champ est obligatoire!',
            'question49.required' => 'Ce champ est obligatoire!',
            'question50.required' => 'Ce champ est obligatoire!',
            'question51.required' => 'Ce champ est obligatoire!',
            'question52.required' => 'Ce champ est obligatoire!',
            // 'question53.required' => 'Ce champ est obligatoire!',
            'question55.required' => 'Ce champ est obligatoire!',
            'question56.required' => 'Ce champ est obligatoire!',
            'question57.required' => 'Ce champ est obligatoire!',
            'question58.required' => 'Ce champ est obligatoire!',
            'question59.required' => 'Ce champ est obligatoire!',
            'question60.required' => 'Ce champ est obligatoire!',
            'question61.required' => 'Ce champ est obligatoire!',
            'question62.required' => 'Ce champ est obligatoire!',
            'question63.required' => 'Ce champ est obligatoire!',
            'question64.required' => 'Ce champ est obligatoire!',
        ]);



        $question = new Question();
        $question->question1 = $request->question1;
        $question->question2 = $request->question2;
        $question->question3 = $request->question3;
        $question->question4 = $request->question4;
        $question->question5 = $request->question5;
        $question->question6 = $request->question6;
        $question->question7 = $request->question7;
        $question->question8 = $request->question8;
        $question->question9 = $request->question9;
        $question->question10 = $request->question10;
        $question->question11 = $request->question11;
        $question->question12 = $request->question12;
        $question->question13 = $request->question13;
        $question->question14 = $request->question14;
        $question->question15 = $request->question15;
        $question->question16 = $request->question16;
        $question->question17 = $request->question17;
        $question->question18 = $request->question18;
        $question->question19 = $request->question19;
        $question->question20 = $request->question20;
        $question->question21 = $request->question21;
        $question->question22= $request->question22;
        $question->question23= $request->question23;
        $question->question24= $request->question24;
        $question->question25= $request->question25;
        $question->question26= $request->question26;
        $question->question27= $request->question27;
        $question->question28= $request->question28;
        $question->question29= $request->question29;
        $question->question30= $request->question30;
        $question->question31= $request->question31;
        $question->question32= $request->question32;
        $question->question33= $request->question33;
        $question->question34= $request->question34;
        $question->question35= $request->question35;
        $question->question36= $request->question36;
        $question->question37= $request->question37;
        $question->question38= $request->question38;
        $question->question39= $request->question39;
        $question->question40= $request->question40;
        $question->question41= $request->question41;
        $question->question42= $request->question42;
        // $question->question43= $request->question43;
        $question->question44= $request->question44;
        $question->question45= $request->question45;
        $question->question46= $request->question46;
        $question->question47= $request->question47;
        $question->question48= $request->question48;
        $question->question49= $request->question49;
        $question->question50= $request->question50;
        $question->question51= $request->question51;
        $question->question52= $request->question52;
        $question->question53= $request->question53;
        $question->question54= $request->question54;
        $question->question55= $request->question55;
        $question->question56= $request->question56;
        $question->question57= $request->question57;
        $question->question58= $request->question58;
        $question->question59= $request->question59;
        $question->question60= $request->question60;
        $question->question61= $request->question61;
        $question->question62= $request->question62;
        $question->question63= $request->question63;
        $question->question64= $request->question64;
        $question->save();


        return view('merci');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
