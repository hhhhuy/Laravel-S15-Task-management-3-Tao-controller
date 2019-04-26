<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row col-12" style="border: 10px solid forestgreen">
        <h2>Thông tin khách hàng</h2>
        <div class="row col-12" style="margin: 20px">
            <form method="" action="" style="width: 100%" >
                @csrf
                <div class="form-group">
                    <label>Họ Tên:</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label>Số điện thoại:</label>
                    <input type="number" class="form-control" name="phone">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <button type="submit" class="btn btn-primary" href="{{route('index')}}">Lưu</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>