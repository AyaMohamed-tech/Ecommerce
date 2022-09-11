<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style>
        .title {
            color: white;
            padding-top: 25px;
            font-size: 25px;
        }

        label {
            display: inline-block;
            width: 200px;
        }

        .file {
            padding-left: 320px;
        }

        .sub {
            padding-left: 350px;
        }
    </style>
</head>

<body>
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
            <h1 class="title">Add Product</h1>

            @if (session()->has('message'))
                <div class="alert alert-success">

                    {{ session()->get('message') }}

                    <button type="button" class="close" data-dismiss="alert">x</button>

                </div>
            @endif

            <form action="{{ url('uploadproduct') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding:15px;">
                    <label>Product title</label>
                    <input style="color:black;" type="text" name="title" placeholder="Give a product title"
                        required>
                </div>
                <div style="padding:15px;">
                    <label>Product price</label>
                    <input style="color:black;" type="number" name="price" placeholder="Give a product price"
                        required>
                </div>
                <div style="padding:15px;">
                    <label>Description</label>
                    <input style="color:black;" type="text" name="description"
                        placeholder="Give a product description" required>
                </div>
                <div style="padding:15px;">
                    <label>Quantity</label>
                    <input style="color:black;" type="text" name="quantity" placeholder="Give a product quantity"
                        required>
                </div>
                <div style="padding:15px;">
                    <div class="file">
                        <input type="file" name="file">
                    </div>

                </div>
                <div style="padding:15px;">
                    <div class="sub">
                        <input class="btn btn-success" type="submit">
                    </div>
                </div>
            </form>

        </div>
    </div>
    <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
</body>

</html>
