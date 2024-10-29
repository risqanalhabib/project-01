<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita</title>
    <link rel="stylesheet" href="../css_berita/menu_tambah.css">
</head>
<body>

   
    <div class="form-container">
    <a href="../index.php" class="btn btn-success ">Back</a>
         <h2>Tambah Berita</h2>
            <label for="judul">Judul Berita:</label>
            <input type="text" id="judul" name="judul" placeholder="Masukkan judul berita" required>

            <label for="isi">Isi Berita:</label>
            <textarea id="isi" name="isi" rows="6" placeholder="Masukkan isi berita" required></textarea>
            
            <label for="tanggal">Tanggal Berita:</label>
            <input type="date" id="tanggal" name="tanggal" required>

            <button type="submit" class="button">Simpan</button>
            </form>
    </div>

</body>
</html>
