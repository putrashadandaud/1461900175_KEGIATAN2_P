<head>
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>Data Perpus</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
        thead {
        background-color: #f2f2f2;
        }
        th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        .tambah{
        padding: 8px 16px ;
        text-decoration: none;
        }
    </style>
</head>
<body>
    <div style="overflow-x:auto;">
    <table>
        <thead>
            <tr>
                <th>buku id</th>
                <th>buku judul</th>
                <th>buku kategori id</th>
                <th>buku deskripsi</th>
                <th>buku jumlah</th>
                <th>buku cover</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($library_0175 as $prs)
            <tr>
                <td>{{$prs->buku_id}}</td>
                <td>{{$prs->buku_judul}}</td>
                <td>{{$prs->kategori_id}}</td>
                <td>{{$prs->buku_deskripsi}}</td>
                <td>{{$prs->buku_jumlah}}</td>
                <td>{{$prs->buku_cover}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>