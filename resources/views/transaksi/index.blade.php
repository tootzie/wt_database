<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Penjualan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
    <h1>Transaksi Penjualan</h1>
       <div>
            <form action="">
                    <label for="">Document No</label>
                    <input type="text" name="docno" class="me-3" value="{{$docno}}">

                    <label for="">Date</label>
                    <input type="date" name="docdate" value="{{$date}}"><br>
                    
                    <label for="custcode">Customer</label>
                    <input type="text" name="custcode" class="me-3" value="{{$custcode}}">

                    <label for="">Customer Name</label>
                    <input type="text" name="custname" value="{{$custname}}"><br>

                    <label for="">Notes</label>
                    <input type="text" name="notes" value="{{$notes}}">
            </form>
       </div>

       <br><br>
       <div>
            <form action="">
                    <label for="">Product</label>
                    <input type="text" name="prodcode" class="me-3" value="{{$prodcode}}">

                    <label for="">Product Name</label>
                    <input type="text" name="prodname" value="{{$prodname}}"><br>
                    
                    <label for="">Unit Price</label>
                    <input type="number" name="unitprice" class="me-3" value="{{$unitprice}}">

                    <label for="">Content</label>
                    <input type="number" name="content" value="{{$content}}"><br>

                    <label for="">Quantity</label>
                    
                    <input type="number" name="qtybig" value="{{$qtybig}}">
                    <label for="">DOS</label>

                    <input type="number" name="qtysmall" value="{{$qtysmall}}">
                    <label for="" class="me-5">PCS</label>

                    <button>Confirm</button>
            </form>
       </div>
        <br><br>
        <div>
            <table class="table table-bordered">
                <thead>
                    <th>ProdCode</th>
                    <th>ProdName</th>
                    <th>Unit Price</th>
                    <th>Content</th>
                    <th>QtyBig</th>
                    <th>UMBig</th>
                    <th>QtySmall</th>
                    <th>UMSmall</th>
                    <th>BonusCode</th>
                    <th>QtyBonus</th>
                    <th>Gross Price</th>

                </thead>
            </table>
        </div>


        <div class="d-flex justify-content-center">
            <a href="" class="btn btn-primary me-3">Save</a>
            <a href="" class="btn btn-danger" style="display: inline;">Delete</a>
        </div>
    </div>
</body>
</html>