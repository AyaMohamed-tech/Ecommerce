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

            @if (session()->has('message'))
                <div class="alert alert-success">

                    {{ session()->get('message') }}

                    <button type="button" class="close" data-dismiss="alert">x</button>

                </div>
            @endif

            <table>
                <tr style="background-color:gray;">
                    <td style="padding: 20px;">Title</td>
                    <td style="padding: 20px;">Description</td>
                    <td style="padding: 20px;">Quantity</td>
                    <td style="padding: 20px;">Price</td>
                    <td style="padding: 20px;">Image</td>
                    <td style="padding: 20px;">Actions</td>

                </tr>

                @foreach ($data as $product)
                    <tr style="background-color:black; align-items:center;">
                        <td style="padding: 20px;">{{ $product->title }}</td>
                        <td style="padding: 20px;">{{ $product->description }}</td>
                        <td style="padding: 20px;">{{ $product->quantity }}</td>
                        <td style="padding: 20px;">{{ $product->price }}</td>
                        <td style="padding: 20px;">
                            <img width="100" height="100" src="/productimage/{{ $product->image }}">
                        </td>
                        <td style="padding: 20px;">
                            <a href="{{ url('updateview',$product->id) }}" class="btn btn-primary">Update</a>
                            <a>
                                <form 
                                     method="POST" 
                                     action="{{ url('deleteproduct', $product->id) }}"
                                     class="btn btn-danger"
                                     onsubmit="return confirm('Are you sure?');">
                                     @csrf
                                     @method('DELETE')
                                     <button type="submit">Delete</button>
                                </form>
                            </a>
                        </td>
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
