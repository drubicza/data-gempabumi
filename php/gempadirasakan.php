<?php
  // Kode Baris PHP untuk Mengolah Data gempadirasakan.xml
  $data = (array)simplexml_load_file("https://data.bmkg.go.id/DataMKG/TEWS/gempadirasakan.xml") or die ("Gagal ambil!");
  echo "<h2>Daftar 15 Gempabumi Dirasakan</h2>";
  foreach($data["gempa"] as $nomor => $gempaDirasakan) {
    echo "No: " . ++$nomor . "<br>";
    echo "Tanggal: " . $gempaDirasakan->Tanggal . "<br>";
    echo "Jam: " .  $gempaDirasakan->Jam . "<br>";
    echo "DateTime: " . $gempaDirasakan->DateTime . "<br>";
    echo "Magnitudo: " . $gempaDirasakan->Magnitude . "<br>";
    echo "Kedalaman: " . $gempaDirasakan->Kedalaman . "<br>";
    echo "Koordinat: " . $gempaDirasakan->point->coordinates . "<br>";
    echo "Lintang: " . $gempaDirasakan->Lintang . "<br>";
    echo "Bujur: " . $gempaDirasakan->Bujur . "<br>";
    echo "Lokasi: " . $gempaDirasakan->Wilayah . "<br>";
    echo "Dirasakan di Wilayah: " . $gempaDirasakan->Dirasakan . "<br><br>";
  }
?>
