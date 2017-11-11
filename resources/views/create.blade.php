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
                    <label for="input1" class="col-xs-4 control-label text-right">กลุ่มงาน :</label>
                    <div class="col-xs-8">
                        <select name="" id="input1">
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

                <div class="collapse" id="div-input2">
                    <div class="form-group">
                        <label for="input2" class="col-xs-4 control-label text-right">งานหลัก :</label>
                        <div class="col-xs-8">
                            <select name="" id="input2">
                                <option value="0">กรุณาเลือก</option>
                            
                            </select>
                            
                        </div>
                    </div>
                </div>

                <div class="collapse">
                    <div class="form-group">
                        <label for="input3" class="col-xs-4 control-label text-right">งานรอง :</label>
                        <div class="col-xs-8">
                            <select name="" id="input3">
                                <option value="0">กรุณาเลือก</option>
                    
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                        <label for="input4" class="col-xs-4 control-label text-right">รายละเอียด :</label>
                        <div class="col-xs-8">
                            <input class="form-control" type="text" id="input4">
                    
                            </select>
                        </div>
                    </div>

        
            </form>
        </div>

    </div>
    
    <script scr="/js/jquery-3.2.1.js"></script>
    <script scr="/js/bootstrap.js"></script>

    <script>
    $("#input1").on('change', function(){
        console.log('value changed to ' + this.value);
        if(this.value != 0){
            $("div-input2").collapse("show");
        }else {
            $("div-input2").collapse("hide");
            
        }
    });
    </script>


</body>
</html>

