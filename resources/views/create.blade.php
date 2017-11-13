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

                <div class="form-group">
                    <label for="mainjob" class="col-xs-4 control-label text-right">กลุ่มงาน :</label>
                    <div class="col-xs-8">
                        <select name="" id="mainjob">
                            <option value="0">กรุณาเลือก</option>
                            <option value="1">งานสารสนเทศ</option>
                            <option value="2">งานนโยบายและแผน</option>
                            <option value="3">งาน CSR</option>
                            <option value="4">งานบุคคล</option>
                            <option value="5">งานประชุม</option>
                            <option value="6">งานฝึกอบรม</option>
                            <option value="7">งานกิจกรรม</option>
                    
                        </select>
                    </div>
                </div>

                <div class="collapse" id="div-subjob">
                    <div class="form-group">
                        <label for="subjob" class="col-xs-4 control-label text-right">งานหลัก :</label>
                        <div class="col-xs-8">
                            <select name="" id="subjob">
                                <option value="0">กรุณาเลือก</option>
                                <option value="1">บริหารจัดการ</option>
                            
                            </select>
                            
                        </div>
                    </div>
                </div>

                <div class="collapse" id="div-taskjob">
                    <div class="form-group">
                        <label for="taskjob" class="col-xs-4 control-label text-right">งานรอง :</label>
                        <div class="col-xs-8">
                            <select name="" id="taskjob">
                                <option value="0">กรุณาเลือก</option>
                                <option value="1">เปิดเคส</option>
                    
                            </select>
                        </div>
                    </div>
                </div>

                <div class="collapse" id="div-subtaskjob">
                    <div class="form-group">
                        <label for="subtaskjob" class="col-xs-4 control-label text-right">งานย่อย :</label>
                        <div class="col-xs-8">
                            <select name="" id="subtaskjob">
                                <option value="0">กรุณาเลือก</option>
                                <option value="1">IT Support</option>
                    
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="detail" class="col-xs-4 control-label text-right">รายละเอียด :</label>
                        <div class="col-xs-8">
                            <input class="form-control" type="text" id="detail">
                        </div>
                </div>

                <div class="form-group">
                    <label for="date" class="col-xs-4 control-label text-right">วันที่ :</label>
                        <div class="col-xs-8">
                            <input class="form-control" type="date" id="date">
                        </div>
                </div>

                <div class="form-group">
                    <label for="starttime" class="col-xs-4 control-label text-right">เวลาเริ่มต้น :</label>
                        <div class="col-xs-8">
                            <input class="form-control" type="time" id="starttime">
                        </div>
                </div>

                <div class="form-group">
                    <label for="stoptime" class="col-xs-4 control-label text-right">เวลาสิ้นสุด :</label>
                        <div class="col-xs-8">
                            <input class="form-control" type="time" id="stoptime">
                        </div>
                </div>

                <div class="form-group">
                    <label for="requester" class="col-xs-4 control-label text-right">ผู้ร้องขอ :</label>
                        <div class="col-xs-8">
                            <input class="form-control" type="text" id="requester">
                        </div>
                </div>

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
    
    <!-- <script scr="/js/jquery-3.2.1.js"></script>-->
    <!-- <script scr="/js/bootstrap.js"></script>  -->

    <!-- <script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous">
    </script> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
        $("#mainjob").on('change', function(){
            console.log('value changed to ' + this.value);
            if(this.value != 0){
                $("#div-subjob").collapse("show");
            }else {
                $("#div-subjob").collapse("hide");        
            }
        });
    </script>

    <script>
        $("#subjob").on('change', function(){
            console.log('value changed to ' + this.value);
            if(this.value != 0){
                $("#div-taskjob").collapse("show");
            }else {
                $("#div-taskjob").collapse("hide");        
            }
        });
    </script>

    <script>
        $("#taskjob").on('change', function(){
            console.log('value changed to ' + this.value);
            if(this.value != 0){
                $("#div-subtaskjob").collapse("show");
            }else {
                $("#div-subtaskjob").collapse("hide");        
            }
        });
    </script>


</body>
</html>

