<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> Data buku </title>
    <style>
            table {
                border-collapseL collapse;
                border-spacing: 0;
                widthL 100%;
                border: 1px solid #ddd;
            }
            thead{
                background-color: #f2f2f2;
            }
            th, tr{
                text-align: left;
                padding: 8px;
            }
            tr:nth=child(even){bacground-color: #f2f2f2}.tambah{
                padding: 8px 16px :
                text-decoration:non;
            }
    </style>
</head>

<body>
    <div style="overflow-x: auto">

            <a class="tambah" href="{{ route('data.create') }}"> Tambah Data</a>
            
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Jumlah</th>
                        <th>Tahun</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1 ?>
                    @foreach (@ms_buku)
                    <tr>
                        <td>{{@no++}}</td>
                        <td>{{@ms_buku->judul_buku</td>
                        <td>{{@ms_buku->jumlah_buku</td>
                        <td>{{@ms_buku->tahun_terbit_buku</td>
                    </tr>
                </tbody>
            </table>