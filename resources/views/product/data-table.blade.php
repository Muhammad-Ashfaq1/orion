@if (!empty($products) && $products->count() > 0)
    @foreach ($products as $product)
        <tr>
            <td>{{ @$loop->index + 1}}</td>
            <td>{{ @$product->productType->type_name ?? '-'}}</td>
            <td>{{ @$product->product_model ?? ' - '}}</td>
            {{-- <td>{{ @$product->wattage ?? ' - '}}</td>
            <td>{{ @$product->guarantee . '  y' ?? ' - '}}</td>
            <td>{{ @$product->initial_lumen ?? ' - '}}</td>
            <td>{{ @$product->stable_lumen ?? ' - '}}</td>
            <td>{{ @$product->life_hours ?? ' - '}}</td> --}}
            <td>
            {{-- <img src="{{ asset('storage/images/products/' . $product->image_url) }}" alt="Product Image"> --}}

                @if(!empty(@$product->image_url))
           <a href="{{ @$product->image_url }}" target="_blank"> 
             <i class="fas fa-eye"></i> View
                    </a>


                {{-- <a href="{{route('image.view',['id' =>  @$product->id])}}"<i class="fas fa-eye"></i> Viewedit</a> --}}

                    
                    </a>
                @else
                    N/A
                @endif
            </td>
            <td>
                <div class="action-buttons d-flex justify-content-center position-relative">
                    <div class="action-buttons-container">
                        <button data-id="{{ @$product->id }}" class="js-edit-asset-register  btn btn-info" style="cursor: pointer">Edit</button>
                        <button data-id="{{ @$product->id }}" class="js-delete-product btn btn-danger"
                                style="cursor: pointer">Delete</button>
                    </div>
                </div>

            </td>
        </tr>
    @endforeach
@endif
