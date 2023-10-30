<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Content</th>
            <th>Amount</th>
        </tr>
    </thead>
    <tbody>
        @foreach($test as $data)
        <tr>
            <td>{{ $data->name }}</td>
            <td>{{ $data->content }}</td>
            <td>{{ $data->amount }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
