function fun() {
    // mengambil data dari input
    var angka = parseFloat(document.getElementById("angka").value);
  
    //melakukan seleksi pada input
    if (angka >= 0 && angka <= 40) {
      document.getElementById("hasil").innerHTML = "E";
    } else if (angka >= 41 && angka <= 55) {
      document.getElementById("hasil").innerHTML = "D";
    } else if (angka >= 56 && angka <= 60) {
      document.getElementById("hasil").innerHTML = "C";
    } else if (angka >= 61 && angka <= 65) {
      document.getElementById("hasil").innerHTML = "BC";
    } else if (angka >= 66 && angka <= 70) {
      document.getElementById("hasil").innerHTML = "B";
    } else if (angka >= 71 && angka <= 80) {
      document.getElementById("hasil").innerHTML = "AB";
    } else if (angka >= 81 && angka <= 100) {
      document.getElementById("hasil").innerHTML = "A";
    } else {
     document.getElementById("hasil").innerHTML = "....";
    }
  }
  function tembak() {
    
  }