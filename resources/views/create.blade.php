<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    
    <link rel="stylesheet" href="/css/bootstrap.css">


    <title>Create log</title>
</head>
<body>
    
    <div class="container">
        <br/>
        <div class="text-center"><h3>Create New Job</h3></div>
        <br/>

        <div class="col-md-4 col-md-offset-4">
            <form action="" class="form-horizontal">

            <!-- ส่วนกรอกข้อมูลกลุ่มงาน (topic) -->

                <div class="form-group">
                    <label for="topic" class="col-xs-4 control-label text-right">กลุ่มงาน :</label>
                    <div class="col-xs-8">
                        <select name="" id="topic">
                        </select>
                    </div>
                </div>

            <!-- ส่วนกรอกข้อมูลงานหลัก (cat) -->

                <div class="collapse" id="div-cat">
                    <div class="form-group">
                        <label for="cat" class="col-xs-4 control-label text-right">งานหลัก :</label>
                        <div class="col-xs-8">
                            <select name="" id="cat">
                            </select>
                        </div>
                    </div>
                </div>

            <!-- ส่วนกรอกข้อมูลงานรอง (task) -->

                <div class="collapse" id="div-task">
                    <div class="form-group">
                        <label for="task" class="col-xs-4 control-label text-right">งานรอง :</label>
                        <div class="col-xs-8">
                            <select name="" id="task">
                            </select>
                        </div>
                    </div>
                </div>

            <!-- ส่วนกรอกข้อมูลงานย่อย (title) -->

                <div class="collapse" id="div-title">
                    <div class="form-group">
                        <label for="title" class="col-xs-4 control-label text-right">งานย่อย :</label>
                        <div class="col-xs-8">
                            <select name="" id="title">
                            </select>
                        </div>
                    </div>
                </div>
            
            <!-- ส่วนกรอกข้อมูลรายละเอียด -->

                <div class="form-group">
                    <label for="detail" class="col-xs-4 control-label text-right">รายละเอียด :</label>
                        <div class="col-xs-8">
                            <input class="form-control" type="text" id="detail">
                        </div>
                </div>

            <!-- ส่วนกรอกข้อมูลวันที่ปฎิบัติงาน-->

                <div class="form-group">
                    <label for="date" class="col-xs-4 control-label text-right">วันที่ :</label>
                        <div class="col-xs-8">
                            <input class="form-control" type="text" id="date">
                        </div>
                </div>
            <!-- ส่วนกรอกข้อมูลเวลาที่เริ่มต้นปฎิบัติงาน -->

                <div class="form-group">
                    <label for="starttime" class="col-xs-4 control-label text-right">เวลาเริ่มต้น :</label>
                        <div class="col-xs-8">
                            <input class="form-control" type="text" id="starttime">
                        </div>
                </div>

            <!-- ส่วนกรอกข้อมูลเวลาที่สิ้นสุดการปฎิบัติงาน -->

                <div class="form-group">
                    <label for="stoptime" class="col-xs-4 control-label text-right">เวลาสิ้นสุด :</label>
                        <div class="col-xs-8">
                            <input class="form-control" type="text" id="stoptime">
                        </div>
                </div>
            <!-- ส่วนกรอกข้อมูล Requester -->

                <div class="form-group">
                    <label for="requester" class="col-xs-4 control-label text-right">ผู้ร้องขอ :</label>
                        <div class="col-xs-8">
                            <input class="form-control" type="text" id="requester">
                        </div>
                </div>

            <!-- ส่วนกรอกข้อมูลสถานะงาน -->

                <div class="form-group">
                    <label for="status" class="col-xs-4 control-label text-right">สถานะงาน :</label>
                        <div class="col-xs-8">
                            <select name="" id="status">
                                <option value="0">กรุณาเลือก</option>
                                <option value="1">Ongoing</option>
                                <option value="2">Complete</option>
                            </select>
                        </div>
                </div>

                <br/>
                <div class="text-right">
                    <button type="button" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger">Cancle</button>
                </div>
                     
        
            </form>
        </div>

    </div>
    
    <!-- <script scr="/js/jquery-3.2.1.js"></script>
    <script scr="/js/bootstrap.js"></script> -->

    <!-- <script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous">
    </script> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>

    // -- ดึงข้อมูลจาก topic มาจาก database --//
        $.get('/api/topic/', function(response){
                    // console.log(response);
                    var options = '<option value="0">กรุณาเลือก</option>';
                    $.each(response, function(index, option){
                        options += '<option value="' + option.value + '">' + option.text + '</option>'
                    });
                    $('#topic').html(options);
                    // console.log(options);
                    });

    // -- Filter ข้อมูล cat จาก topic โดยถ้าไม่ได้เลือก topic ให้ซ่อน cat ไว้ --//
        $("#topic").on('change', function(){
            // console.log(this.value);
            if(this.value == 0){
                $("#div-cat").collapse("hide");
            }else{
                $.get('/api/cat/' + this.value, function(response){
                    // console.log(response);
                    var options = '<option value="0">กรุณาเลือก</option>';
                    $.each(response, function(index, option){
                        options += '<option value="' + option.value + '">' + option.text + '</option>'
                    });
                    $('#cat').html(options);
                    // console.log(options);
                    });
                $("#div-cat").collapse("show");

            }

        });


    </script>


    <script>

    // -- Filter ข้อมูล task จาก cat โดยถ้าไม่ได้เลือก cat ให้ซ่อน task ไว้ --//
        $("#cat").on('change', function(){
            console.log(this.value);
            if(this.value == 0){
                $("#div-task").collapse("hide");
            }else{
                $.get('/api/task/'+'1'+'/'+ this.value, function(response){
                    console.log(response);
                    var options = '<option value="0">กรุณาเลือก</option>';
                    $.each(response, function(index, option){
                        options += '<option value="' + option.value + '">' + option.text + '</option>'
                    });
                    $('#task').html(options);
                    console.log(options);
                    });
                $("#div-task").collapse("show");
            }

        });
    
    </script>

        
















    <!-- <script>
        $("#topic").on('change', function(){
            console.log('value changed to ' + this.value);
            if(this.value != 0){
                $("#div-cat").collapse("show");
            }else {
                $("#div-cat").collapse("hide");        
            }
        });
    </script>

    <script>
        $("#cat").on('change', function(){
            console.log('value changed to ' + this.value);
            if(this.value != 0){
                $("#div-task").collapse("show");
            }else {
                $("#div-task").collapse("hide");        
            }
        });
    </script>

    <script>
        $("#task").on('change', function(){
            console.log('value changed to ' + this.value);
            if(this.value != 0){
                $("#div-title").collapse("show");
            }else {
                $("#div-title").collapse("hide");        
            }
        });
    </script> -->


</body>
</html>

