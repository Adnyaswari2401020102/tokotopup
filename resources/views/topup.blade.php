<!DOCTYPE html>
<html>
<head>
    <title>Toko Top Up Game</title>
</head>
<body>

<h2>Top Up Game (Tanpa Database)</h2>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<form method="POST" action="/topup">
    @csrf
    <input type="text" name="nama" placeholder="Nama" required><br><br>
    <input type="text" name="user_id" placeholder="User ID Game" required><br><br>

    <select name="game">
        <option>Mobile Legends</option>
        <option>Free Fire</option>
    </select><br><br>

    <select name="produk">
        <option>86 Diamond</option>
        <option>172 Diamond</option>
        <option>70 Diamond</option>
    </select><br><br>

    <button type="submit">Top Up</button>
</form>

<hr>

<h3>Riwayat Transaksi (Session)</h3>
<ul>
@foreach($transactions as $t)
    <li>
        {{ $t['nama'] }} - {{ $t['game'] }} - {{ $t['produk'] }} - {{ $t['status'] }}
    </li>
@endforeach
</ul>

</body>
</html>
