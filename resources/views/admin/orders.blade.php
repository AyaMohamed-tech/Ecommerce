<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="container p-3" align="center">
            <table>
                <tr style="background-color:gray;">
                    <td style="padding: 20px;">Customer name</td>
                    <td style="padding: 20px;">Phone</td>
                    <td style="padding: 20px;">Address</td>
                    <td style="padding: 20px;">Product title</td>
                    <td style="padding: 20px;">Price</td>
                    <td style="padding: 20px;">Quantity</td>
                    <td style="padding: 20px;">status</td>
                    <td style="padding: 20px;">Action</td>
                </tr>

                @foreach ($orders as $order)

                <tr style="background-color:black; align-items:center;">
                    <td style="padding: 20px;">{{ $order->name }}</td>
                    <td style="padding: 20px;">{{ $order->phone }}</td>
                    <td style="padding: 20px;">{{ $order->address }}</td>
                    <td style="padding: 20px;">{{ $order->product_name }}</td>
                    <td style="padding: 20px;">{{ $order->price }}</td>
                    <td style="padding: 20px;">{{ $order->quantity }}</td>
                    <td style="padding: 20px;">{{ $order->status }}</td>
                    <td style="padding: 20px;"><a class="btn btn-success" href="{{ url('updatestatus',$order->id) }}">Deliverd</a></td>
                </tr>
                    
                @endforeach
            </table>
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
