CREATE TABLE kategori_produk (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(45) NOT NULL
);


CREATE TABLE produk (
    id INT KEY AUTO_INCREMENT,
    kode VARCHAR(10) NOT NULL,
    nama VARCHAR(45) NOT NULL,
    harga_jual DOUBLE NOT NULL,
    harga_beli DOUBLE NOT NULL,
    stok INT NOT NULL,
    min_stok INT NOT NULL,
    deskripsi TEXT,
    kategori_produk_id INT,
    FOREIGN KEY (kategori_produk_id) REFERENCES kategori_produk(id)
);

CREATE TABLE pesanan (
    id INT PRIMARY KEY AUTO_INCREMENT,
    tanggal DATE NOT NULL,
    nama_pemesan VARCHAR(45) NOT NULL,
    alamat_pemesan VARCHAR(45) NOT NULL,
    no_hp VARCHAR(20) NOT NULL,
    email VARCHAR(45),
    jumlah_pesanan INT NOT NULL,
    deskripsi TEXT,
    produk_id INT,
    FOREIGN KEY (produk_id) REFERENCES produk(Id)
);