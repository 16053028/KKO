USE KKO;


CREATE TABLE biodata_mahasiswa(
npm int (8),
nama VARCHAR (35),
jenis_kelamin VARCHAR (10),
tempat_lahir VARCHAR (20),
tanggal_lahir DATE,
no_telpon INT (15),
agama VARCHAR (30),
alamat VARCHAR (35),
kota VARCHAR (35),
PRIMARY KEY (npm)
);

INSERT INTO biodata_mahasiswa
(npm,nama,jenis_kelamin,tempat_lahir,tanggal_lahir,no_telpon,agama,alamat,kota)
VALUES
('16050000','admin','','surabaya','1-1-2017','','','','surabaya');
