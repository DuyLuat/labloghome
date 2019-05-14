<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm tin tức</title>
</head>
<body>
    <h1>Thêm tin tức</h1>
@if(count($errors)>0)
    <ul>
    @foreach($errors->all() as $error)
    <li>{!!$error!!}</li>
    @endforeach
    </ul>
@endif
    <form action="{!! route('formdangky')!!}" method="post">
    <input type="hidden" name="_token" value={{csrf_token()}}>
    <label for="txtmonhoc">Môn học</label>
    <input type="text" name="txtmonhoc" id="txtmonhoc"><br />
    <label for="txtgiatien">Giá tiền</label>
    <input type="text" name="txtgiatien" id="txtgiatien"><br />
    <label for="txtgiangvien">Giảng viên</label>
    <input type="text" name="txtgiangvien" id="txtgiangvien"><br/>
    <input type="submit" name="btnGui" value="Gửi">
    </form>
</body>
</html>