@if (!empty($warranties) && $warranties->count() > 0)
    @foreach ($warranties as $warranty)
        <tr>
            <td>{{ @$loop->index + 1}}</td>
            <td>{{ @$warranty->productType->type_name}}</td>
            <td>{{ @$warranty->warranty_name ?? ' - '}}</td>
            <td>{{ @$warranty->start_date ?? ' - '}}</td>
            <td>{{ @$warranty->end_date ?? ' - '}}</td>

            <td>
                @if(!empty(@$warranty->image_url))
                    <a href="{{ @$warranty->image_url }}" target="_blank">
                        <i class="fas fa-eye"></i> View
                    </a>
                @else
                    N/A
                @endif
            </td>
            <td>
                <div class="action-buttons d-flex justify-content-center position-relative">
                    <div class="action-buttons-container">
                        <button data-id="{{ @$warranty->id }}" class="js-delete-warranty btn btn-danger"
                                style="cursor: pointer">Delete</button>
                    </div>
                </div>

            </td>
        </tr>
    @endforeach
@endif
