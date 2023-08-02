<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>F-02</title>
    <style>
        html {
        font-size: 13px;
    }

    body {
        font-family: 'Poppins', sans-serif;
    }

    .container3 {
        text-align: center;
    }

    .table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 7px;
    }
    th {
        text-align: left;
    }

    th, td {
        border-bottom: 1px solid #ddd;
        padding: 18px;
    }

    .center-text h1 {
        margin-bottom: 10px;
    }



    .table-bordered td.bold-text {
        font-weight: bold;
    }

    /* Additional CSS to move "WAKTU PEMINJAMAN" to the top left corner */
    .footer {
    padding: 20px;
    text-align: center;

    position: fixed;left: 0;
    bottom: 0;
    width: 100%;
    }


    .container1 {
    display: flex;
    justify-content: space-between;
    }
    .waktu-peminjaman-container {
        text-align: left;
        margin-top: 50px; /* Adjust the top margin as desired */
        margin-left: 20px; /* Adjust the left margin as desired */
    }

    .gambar {
        text-align: right; /* Aligns text to the right */
        margin-top: 50px; /* Adjust the top margin as desired */
        margin-right: 70px; /* Adjust the left margin as desired */
    }

    .container2 {
    display: flex;
    justify-content: space-between;
    }

    .jaminan-container {
    text-align: left; /* Aligns text to the left (default) */
    margin-left: 20px; /* Adjust the left margin as desired */
    }

    .jaminan-container p {
    margin-left: 60px; /* Adjust the left margin as desired */
    margin-top: -30px; /* Adjust the top margin as desired */
    }

    .nama-container {
    text-align: right; /* Aligns text to the right */
    margin-right: 60px; /* Adjust the left margin as desired */
    }

    .nama-container p{
    margin-right: 100px; /* Adjust the left margin as desired */
    }
    .kotak {
    width: 20px; /* Lebar kotak */
    height: 20px; /* Tinggi kotak */
    border: 3px solid #000; /* Tepi kotak dengan ketebalan 1px dan warna hitam (#000) */

    }





    </style>
</head>
<body>
    <div>
        <div class="container3">
            <p>INSTITUT TEKNOLOGI TELKOM SURABAYA</p>
            <h1>LIST PEMINJAMAN ASET</h1>
            <h4 class="logistic">LOGISTIC ASSET MANAGEMENT</h4>
        </div>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ITEM</th>
                    <th>QTY</th>
                    <th>KETERANGAN</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas2 as $alat)
                    <tr>
                        <td>{{$alat->barang->nama_barang}}</td>
                        <td>{{$alat->jumlah}}</td>
                        <td>{{$alat->status}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="footer">
            <div class="container1">
                <div class="waktu-peminjaman-container">
                    <h3>WAKTU PEMINJAMAN</h3>
                    <p>Start : {{$datas1->tanggal_pinjam}}</p>
                    <p>End : {{$datas1->tanggal_kembali}}</p>
                </div>
                <div class="gambar">
                    <img src="logamITTS.png" />
                </div>

            </div>

            <div class="container2">
                <div class="jaminan-container">
                    <h3>JAMINAN</h3>
                    <div class="kotak"></div>
                    <p>Menyerahkan KTM / {{$datas1->user->name}} <br> Kepada Logistic Asset Management</p>
                </div>
                <div class="nama-container">
                    {{-- <img src="laravel.png" alt="image"> --}}
                    <h3>Walid Maulana Hadiansyah, S.T.,M.T.</h3>
                    <p>NIP. 19890002</p>
                </div>
            </div>
        </div>




    </div>
</body>
</html>
