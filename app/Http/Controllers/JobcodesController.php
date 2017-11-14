<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobcodesController extends Controller
{
    public function uploadFile(Request $request){
        //เช็คว่า $request input ที่ชื่อว่า 'files' เป็นไฟล์หรือไม่
        if ($request->hasFile('files')){

          foreach($request->file('files') as $file){
            //เช็คว่า ไฟล์ upload มีปัญหรือไม่
            if ($file->isValid()) {
              //สร้างโฟลเดอร์ ที่ชื่อ upload แล้ว upload file เข้าไป แล้วเก็บใส่ตัวแปรชื่อ $filePaths
              $filePaths[] = $file->store('uploads');
              //load function loadCSVFromUpload แล้วเก็บเข้าตัวแปรชื่อ $data
              $data = $this->loadCSVFromUpload($filePaths[0]);
            }
          }

            foreach($filePaths as $filePath){
            //load data from file to table โดยเรียกใช้ function loadData
            $data = $this->loadData($filePath);
            }
        }
        else{
          return back();
        }
          return view('/loadcsv');

    }

    function loadCSVFromUpload($fileName) {
        // ไฟล์ csv จากโฟลเตอร์ app/upload
        $fileName = storage_path('app/' . $fileName);

        // check ก่อนว่าไฟล์นี้มีจริงและอ่านได้ด้วย ถ้าไม่ได้ก็เลิก
        if(!file_exists($fileName) || !is_readable($fileName))
            return FALSE;
        else {
            $header = NULL; // คือ headrow เก็บ ชื่อ filed นั่นเอง
            $data = array(); // เอาไว้เก็บข้อมูลจากไฟล์
            $count = 0;

            // เช็คก่อนว่า เปิดอ่านได้ไหม ส่วน 'r' = read only
            if (($handle = fopen($fileName, 'r')) !== FALSE){
                // วนลูปตามจำนวณ row ที่ได้จาก fgetcsv ส่วน 3000 คือค่าสูงสุดของจำนวณ chars ใน 1 row
                while (($row = fgetcsv($handle, 3000, ",")) !== FALSE){
                    if(!$header) // ถ้า $header ยังว่างอยู่
                        $header = $row; // ดังนั้น $header = row แรก
                    else
                        // $row ต่อๆมาก็จะเป็น data จึงให้ combine กับ $header เป็น associate array แล้วใส่ใน $data
                        $data[] = array_combine($header, $row);
                }
            }
            fclose($handle); // ปิดไฟล์
            return $data;
        }
    }

    public function loadData($fileName)
    {
      //โหลดข้อมูลเข้าตัวแปร $rfidRecords
      $rfidRecords = $this->loadCSVFromUpload($fileName);

      foreach ($rfidRecords as $rfidRecord) {
        //แปลง date_stamp ให้เป็น format เดือน/วัน/ปี
        //$rfidRecord['date_stamp'] = Carbon::createFromFormat('m/d/Y', $rfidRecord['date_stamp'])->toDateString();
        //สร้าง record ลงฐานข้อมูล
        \App\JobCode::create($rfidRecord);

      }
    }


  }