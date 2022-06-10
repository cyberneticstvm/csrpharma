@extends("base")

@section("content")
<div class="body-header border-bottom d-flex py-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <!--<small class="text-muted">Welcome</small>-->
                <h1 class="h4 mt-1">Product Register</h1>
            </div>
        </div> <!-- Row end  -->
    </div>
</div>
<div class="body d-flex py-lg-4 py-3">
    <div class="container">        
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <p class="text-end"><a href="/product/create/"><i class="fa fa-lg fa-plus text-primary"></i></a></p>
                        <table id="MyDataTable" class="table table-sm table-striped mb-0" style="width: 100%;">
                            <thead>
                                <tr>                                       
                                    <th>SL No</th>
                                    <th>Product Name</th>
                                    <th>Subcategory</th>
                                    <th>SKU</th>
                                    <th>HSN</th>
                                    <th>Molecules</th>
                                    <th>Edit</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php $c = 1; @endphp
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $c++ }}</td>
                                <td>{{ $product->product_name }}</td>           
                                <td>{{ $product->subcategory_name }}</td>           
                                <td>{{ $product->sku }}</td>           
                                <td>{{ $product->hsn }}</td>           
                                <td>{{ $product->molecule_name }}</td>           
                                <td><a class='btn btn-link' href="{{ route('product.edit', $product->id) }}"><i class="fa fa-pencil text-warning"></i></a></td>
                                <td>
                                <form method="post" action="{{ route('product.delete', $product->id) }}">
                                    @csrf 
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-link" onclick="javascript: return confirm('Are you sure want to delete this Record?');"><i class="fa fa-trash text-danger"></i></button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection