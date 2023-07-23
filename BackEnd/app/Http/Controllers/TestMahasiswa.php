<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class TestMahasiswa extends Controller
{
    //

    public function insert(Request $request){

        
        try{
            $arry = array(
                'nama' => $request->siswa,
                'nilai' => '0',
                'status' => 'gagal'
            );
            $check = DB::table('siswa')->where('nama', $request->siswa)->get();
            if(count($check) > 0){
                return response()->json(['status' => 500, 'message' => 'Username Sudah Ada', 'data' => $request->siswa]);
            }
            DB::table('siswa')->insert($arry);
            return response()->json(['status' => 200, 'message' => 'Berhasil Insert Data', 'data' => $request->siswa]);
        }catch(\Exception $e){
            return response()->json(['status' => 500, 'message' => 'Gagal Insert Data', 'data' => $request->siswa]);
        }

    }

    public function createdata(){

// // $id = $this->create($data)->id;
//         $header = array('siapa penemu facebook?',
//             'siapa penemu tesla?',
//             'siapa penemu lampu?',
//             'apa itu reusable dalam programming?'
//             ,'kegunaan function?'
//             ,'citra kirana siapa?'
//             ,'siapa jisoo blackpink dududdud'
//             ,'siapa itu eunha'
//             ,'apa mata uang indo'
//             ,'ketawa nya bebek'
//     );
//     $header_jawaban = array();
//     foreach($header as $key=> $value){
//         $arr_header[] = array(
//             'pertanyaan' => $header[$key],
//             'jawaban' => 'B',
//         );
    // }
    $arr = array();
    for($i=0; $i<1; $i++){
        $arrta = array(
            'id_pertanyaan' => 1,
            'jawaban' => 'elon',
            'pilihan_ganda' => 'A',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 1,
            'jawaban' => 'mark',
            'pilihan_ganda' => 'B',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 1,
            'jawaban' => 'reusmana',
            'pilihan_ganda' => 'C',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 1,
            'jawaban' => 'yunita',
            'pilihan_ganda' => 'D',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 2,
            'jawaban' => 'mark',
            'pilihan_ganda' => 'A',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 2,
            'jawaban' => 'elon',
            'pilihan_ganda' => 'B',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 2,
            'jawaban' => 'reusmana',
            'pilihan_ganda' => 'C',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 2,
            'jawaban' => 'yunita',
            'pilihan_ganda' => 'D',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 3,
            'jawaban' => 'mark',
            'pilihan_ganda' => 'A',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 3,
            'jawaban' => 'Thomas Edison',
            'pilihan_ganda' => 'B',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 3,
            'jawaban' => 'reusmana',
            'pilihan_ganda' => 'C',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 3,
            'jawaban' => 'yunita',
            'pilihan_ganda' => 'D',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 4,
            'jawaban' => 'Mana saya tau',
            'pilihan_ganda' => 'A',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 4,
            'jawaban' => 'Bisa Di panggil Berulang ulang',
            'pilihan_ganda' => 'B',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 4,
            'jawaban' => 'Ko tanya saya',
            'pilihan_ganda' => 'C',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 4,
            'jawaban' => 'Yo wisss',
            'pilihan_ganda' => 'D',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 5,
            'jawaban' => 'Bisa Menghantuin',
            'pilihan_ganda' => 'A',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 5,
            'jawaban' => 'Bisa Jadi Reusable',
            'pilihan_ganda' => 'B',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 5,
            'jawaban' => 'Ko tanya saya',
            'pilihan_ganda' => 'C',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 5,
            'jawaban' => 'Yo wisss',
            'pilihan_ganda' => 'D',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 6,
            'jawaban' => 'Pemain Si paling tersakiti',
            'pilihan_ganda' => 'A',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 6,
            'jawaban' => 'Pemain Sinetron',
            'pilihan_ganda' => 'B',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 6,
            'jawaban' => 'Ko tanya saya',
            'pilihan_ganda' => 'C',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 6,
            'jawaban' => 'Main Bola',
            'pilihan_ganda' => 'D',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 7,
            'jawaban' => 'Artisan Indo',
            'pilihan_ganda' => 'A',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 7,
            'jawaban' => 'Anggota Grup Girl band',
            'pilihan_ganda' => 'B',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 7,
            'jawaban' => 'Ko tanya saya',
            'pilihan_ganda' => 'C',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 7,
            'jawaban' => 'ADuhhhhhh',
            'pilihan_ganda' => 'D',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 8,
            'jawaban' => 'Artisan Indo',
            'pilihan_ganda' => 'A',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 8,
            'jawaban' => 'Anggota Grup Girl band',
            'pilihan_ganda' => 'B',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 8,
            'jawaban' => 'Ko tanya saya',
            'pilihan_ganda' => 'C',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 8,
            'jawaban' => 'ADuhhhhhh',
            'pilihan_ganda' => 'D',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 9,
            'jawaban' => 'Dolar',
            'pilihan_ganda' => 'A',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 9,
            'jawaban' => 'Rupiah',
            'pilihan_ganda' => 'B',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 9,
            'jawaban' => 'Ko tanya saya',
            'pilihan_ganda' => 'C',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 9,
            'jawaban' => 'Nihaoooo',
            'pilihan_ganda' => 'D',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 10,
            'jawaban' => '5555',
            'pilihan_ganda' => 'A',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 10,
            'jawaban' => 'wkwkkwkw',
            'pilihan_ganda' => 'B',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 10,
            'jawaban' => 'Ko tanya saya',
            'pilihan_ganda' => 'C',
        );
        array_push($arr, $arrta);
        $arrta = array(
            'id_pertanyaan' => 10,
            'jawaban' => 'huhuhuuhu',
            'pilihan_ganda' => 'D',
        );
        array_push($arr, $arrta);
    }
    // dd($arr);
    foreach($arr as $key => $value){
        // dd($value);
        \Log::info($key);
        // DB::table('jawaban')->insert(['id_pertanyaan' => $value['id_pertanyaan'], 'jawaban' => $value['jawaban'], 'pilihan_ganda' => $value['pilihan_ganda']]);

    }

    dd("berhasil");
    }

    public function getSoal(){
        try{
            $getdata = DB::select('select p.*, b.id_pertanyaan, b.jawaban as jb, b.pilihan_ganda from pertanyaan p left join jawaban b on p.id = b.id_pertanyaan');
            return response()->json(['status' => 200, 'message' => 'Get Data Berhasil', 'data' => json_encode($getdata)]);
        }catch(\Exception $e){
            \Log::info($e);
            return response()->json(['status' => 500, 'message' => 'Get Data Gagal', 'data' => $e->getMessage()]);
        }
    }

    public function updateSiswa(Request $request){
        try{
            $score = $request->score;
            $name = $request->name;
            $hasil = ($score / 10) * 100;
            $arry = array(
                'nilai' => $hasil,
                'status' => 'done'
            );
            DB::table('siswa')->where('nama', $name)->update($arry);
            return response()->json(['status' => 200, 'message' => 'Berhasil', 'data' => "sudah"]);
        }catch(\Exception $e){
            \Log::info($e);
            return response()->json(['status' => 500, 'message' => 'Gagal', 'data' => $e->getMessage()]);
        }
    }

    public function getSiswaHasil(){
        try{
            $data = DB::table('siswa')->get();
            return response()->json(['status' => 200, 'message' => 'Berhasil', 'data' => json_encode($data)]);
        }catch(\Exception $e){
            \Log::info($e);
            return response()->json(['status' => 500, 'message' => 'Gagal', 'data' => $e->getMessage()]);
        }
    }
}
