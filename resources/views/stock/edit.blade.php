@extends("base")

@section("content")
<div class="body-header border-bottom d-flex py-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <!--<small class="text-muted">Welcome</small>-->
                <h1 class="h4 mt-1">Edit Stock</h1>
            </div>
        </div> <!-- Row end  -->
    </div>
</div>
<div class="body d-flex py-lg-4 py-3">
    <div class="container">        
        <div class="row g-4">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body">                        
                        <form method="post" action="{{ route('stock.update', $stock->id) }}">
                            @csrf
                            @method("PUT")
                            <div class="row g-4">
                                <h6 class="text-primary">Basic Information</h6>                                
                                <div class="col-sm-3">
                                    <label class="form-label">Entry Date <span class="req">*</span></label>
                                    <fieldset class="form-icon-group left-icon position-relative">
                                        <input type="text" class="form-control dtpicker" name="entry_date" value="{{ date('d/M/Y', strtotime($stock->entry_date)) }}" placeholder="dd/mm/yyyy" />
                                        <div class="form-icon position-absolute">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                                                <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                            </svg>
                                        </div>
                                        @error('entry_date')
                                        <small class="text-danger">{{ $errors->first('entry_date') }}</small>
                                         @enderror
                                    </fieldset>                                    
                                </div>
                                <div class="col-sm-3">
                                    <label class="form-label">Invoice / Reference Number<span class="req">*</span></label>
                                    <input type="text" class="form-control" name="reference_id" value="{{ $stock->reference_id }}" placeholder="Invoice / Reference Number" />
                                    @error('reference_id')
                                    <small class="text-danger">{{ $errors->first('reference_id') }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Notes / Remarks</label>
                                    <input type="text" class="form-control" name="notes" value="{{ $stock->notes }}" placeholder="Notes / Remarks" />
                                    @error('notes')
                                    <small class="text-danger">{{ $errors->first('notes') }}</small>
                                    @enderror
                                </div>                                
                            </div>
                            <div class="row g-4 mt-3">
                                <h6 class="text-primary">Product Information</h6>
                                <div class="col-sm-12">
                                    <table class="table table-bordered tblStock">
                                        <thead class="text-center">
                                            <tr><th width="40%">Product</th><th>Batch No.</th><th>Exp. Date</th><th>Qty</th><th>MRP/Qty</th><th>Sell. Price/Qty</th><th></th></tr>
                                        </thead>
                                        <tbody>
                                            @php $c = 0; @endphp
                                            @foreach($stock_details as $sd)
                                            @php $c++; @endphp
                                            <tr>
                                                <td>
                                                    <select class="form-control select2 selProduct" name="product[]" required="required">
                                                        <option value="">Select</option>
                                                        @foreach($products as $product)
                                                            <option value="{{ $product->id }}" {{ ($sd->product_id == $product->id) ? 'selected' : '' }}>{{ $product->product_name.' - '.$product->sku }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td><input type="text" class="form-control" placeholder="Batch No." value="{{ $sd->batch_no }}" name="batch_no[]" required='required'></td>
                                                <td><input type="text" class="form-control" placeholder="mm/yyyy" value="{{ date('m/Y', strtotime($sd->expiry_date)) }}" name="expiry_date[]" required='required'></td>
                                                <td><input type="number" step='any' class="form-control text-end qty" placeholder="0" name="qty[]" value="{{ $sd->qty }}" required='required'></td>
                                                <td><input type="number" step='any' class="form-control text-end mrp" placeholder="0" name="mrp[]" value="{{ $sd->mrp }}" required='required'></td>
                                                <td><input type="number" step='any' class="form-control text-end srp" placeholder="0" name="srp[]" value="{{ $sd->selling_price }}" required='required'></td>
                                                <td class='text-center'>@if($c != 1)<a href='javascript:void(0)' onClick='$(this).parent().parent().remove()'><i class='fa fa-trash text-danger'></i></a>@endif</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row mt-1 g-4">
                                <div class="col-sm-12 text-end">
                                    <button type="submit" class="btn btn-submit btn-primary">UPDATE</button>
                                    <button type="button" onClick="history.back()" class="btn btn-warning">CANCEL</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- .row end -->
    </div>
</div>
@endsection