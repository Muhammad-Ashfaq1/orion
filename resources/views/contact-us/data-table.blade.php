@if (!empty($queries) && $queries->count() > 0)
    @foreach ($queries as $query)
        <tr>
            <td>{{ @$loop->index + 1 }}</td>
            <td>{{ @$query->name }}</td>
            <td>{{ @$query->message ?? ' - ' }}</td>
            <td>{{ @$query->created_at ? $query->created_at->format('d-M-Y') : ' - ' }}</td>
            <td><a href="tel:{{ $query->phone_number }}" target="_blank" style="color: blue;">{{ $query->phone_number }}</a></td>
            <td><a href="mailto:{{ $query->email }}" target="_blank" style="color: blue;">{{ $query->email ?? 'EMAIL' }}</a></td>
            <td>
                <div class="action-buttons d-flex justify-content-center position-relative">
                    <div class="action-buttons-container">
                        <button data-id="{{ @$query->id }}" class="js-delete-warranty btn btn-danger"
                                style="cursor: pointer">Delete</button>
                    </div>
                </div>
            </td>
        </tr>
    @endforeach
@endif
