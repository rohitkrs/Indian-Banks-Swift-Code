<!doctype html>
<html>

<head>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container">
        <br/>
        <div class="panel panel-primary">
            <div class="panel-heading">
                Add Item
            </div>
            <div class="panel-body">
                <form method="post" action="{{ route('store') }}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-md-4">Item Name</label>
                        <input type="text" class="form-control" name="name" />
                    </div>
                    <div class="form-group">
                        <label class="col-md-4">Item Price</label>
                        <input type="text" class="form-control" name="price" />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>