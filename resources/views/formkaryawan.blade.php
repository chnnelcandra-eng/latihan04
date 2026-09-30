<!DOCTYPE html>
<html>
    <body>
        <h1>Form Karyawan</h1>
        <form action="insertkaryawan" method="POST">
            @csrf
            <input type="text" name="kode" part="" placeholder="Kode"><br>
            <input type="text" name="nama" part="" placeholder="Nama"><br>
            <input type="number" name="umur" part="" placeholder="Umur"><br>
            <button type="submit"> Save </button>
        </form>
    </body>
</html>