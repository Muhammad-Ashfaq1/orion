@if (!empty($warranties) && $warranties->count() > 0)
    @foreach ($warranties as $warranty)
        <tr>
            <td>{{ @$loop->index + 1}}</td>
            <td>{{ @$loop->index + 1}}</td>
            <td>{{ @$warranty->start_date}}</td>
            <td>{{ @$warranty->end_date ?? ' - '}}</td>
            <td>{{ @$warranty->image_path ?? ' - '}}</td>
            <td>{{ @$warranty->image_path ?? ' - '}}</td>
            <td>
                <div class="action-buttons d-flex justify-content-center position-relative">
                    <div class="action-buttons-container">
                        <button data-id="{{ @$warranty->id }}" class="js-edit-warranty btn btn-info" style="cursor: pointer">Edit</button>
                        <button data-id="{{ @$warranty->id }}" class="js-delete-warranty btn btn-danger"
                                style="cursor: pointer">Delete</button>
                    </div>
                </div>

            </td>
        </tr>
    @endforeach
@endif
