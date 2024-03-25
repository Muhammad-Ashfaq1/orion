@if (!empty($products) && $products->count() > 0)
    @foreach ($products as $product)
        <tr>
            <td>{{ @$loop->index + 1}}</td>
            <td>{{ @$product->name}}</td>
            <td>{{ @$product->ram ?? ' - '}}</td>
            <td>{{ @$product->rom ?? ' - '}}</td>
            <td>{{ @$product->processor ?? ' - '}}</td>
            <td>{{ @$product->generation ?? ' - '}}</td>
            <td>{{ @$product->model ?? ' - '}}</td>
            <td>{{ @$product->serial_no ?? ' - '}}</td>
            <td>{{ @$product->purchase_date ?? ' - '}}</td>
            <td>{{ @$product->expiry_date ?? ' - '}}</td>
            <td>{{ @$product->status }}</td>
            <td>{{ @$product->condition}}</td>
            <td>
                <div class="action-buttons d-flex justify-content-center position-relative">
                    <div class="action-buttons-container">
                        <button data-id="{{ @$product->id }}" class="js-edit-asset-register btn btn-info" style="cursor: pointer">Edit</button>
                        <button data-id="{{ @$product->id }}" class="js-delete-asset-register btn btn-danger"
                                style="cursor: pointer">Delete</button>
                    </div>
                </div>

            </td>
        </tr>
    @endforeach
@endif
