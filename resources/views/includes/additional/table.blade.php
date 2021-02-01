<h2>Остатки обновления</h2>
<div class="table-responsive">
    <table id='updateTable' class="table table-sm">
        <thead>
            <tr>
                <th>Наименование</th>
                <th>Артикул</th>
                <th>Код</th>
                <th>Статус</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $item)
                @if ($item[0] == 10) <tr id="row" class="table-row-color--false">    
                @else  <tr id="row" class="table-row-color--true"> @endif
                <td>{{ $item[1] }}</td>
                <td>{{ $item[2] }}</td>
                <td>{{ $item[3] }}</td>
                <td>{{ $item[0] }}</td>
                </tr> 
            @endforeach
        </tbody>
    </table>
</div>