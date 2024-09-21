

@if (!empty($specification) && $specification->count() > 0)
    @foreach ($specification as $sp)
        <tr>
            <td>{{ @$loop->index + 1}}</td>
            <td>{{ @$sp->productType->type_name ?? '-'}}</td>
            <td>{{ @$sp->product_model ?? ' - '}}</td>
            <td>{{ @$sp->wattage ?? ' - '}}</td>
            <td>{{ @$sp->guarantee . '  y' ?? ' - '}}</td>
            <td>{{ @$sp->initial_lumen ?? ' - '}}</td>
            <td>{{ @$sp->stable_lumen ?? ' - '}}</td>
            <td>{{ @$sp->life_hours ?? ' 25000 '}}</td>
            <td>
 

 @if(!empty(@$sp->image_url))
   <a href="{{ asset('storage/images/products/' . $sp->image_url) }}" target="_blank">
     <i class="fas fa-eye"></i> View
   </a>



                {{-- <a href="{{route('image.view',['id' =>  @$s->id])}}"<i class="fas fa-eye"></i> Viewedit</a> --}}

                    
                    </a>
                @else
                    N/A
                @endif
            </td>
            <td>
                <div class="action-buttons d-flex justify-content-center position-relative">
                    <div class="action-buttons-container">
                        <button data-id="{{ @$sp->id }}" class="js-edit-asset-register  btn btn-info" style="cursor: pointer">Edit</button>
                        <button data-id="{{ @$sp->id }}" class="js-delete-s btn btn-danger"
                                style="cursor: pointer">Delete</button>
                    </div>
                </div>

            </td>
        </tr>
    @endforeach
@endif
