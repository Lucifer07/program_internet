function tambah() {
    var a1 = parseFloat(document.getElementById("a1").value);
    var a2 = parseFloat(document.getElementById("a2").value);
    document.getElementById("hasil").innerHTML = a1 + a2;
  }
  
  function kurang() {
    var a1 = parseFloat(document.getElementById("a1").value);
    var a2 = parseFloat(document.getElementById("a2").value);
    document.getElementById("hasil").innerHTML = a1 - a2;
  }
  
  function kali() {
    var a1 = parseFloat(document.getElementById("a1").value);
    var a2 = parseFloat(document.getElementById("a2").value);
    document.getElementById("hasil").innerHTML = a1 * a2;
  }
  
  function bagi() {
    var a1 = parseFloat(document.getElementById("a1").value);
    var a2 = parseFloat(document.getElementById("a2").value);
    document.getElementById("hasil").innerHTML = a1 / a2;
  }
  