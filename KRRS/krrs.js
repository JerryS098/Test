function submitprofil() {
    alert("Data anda berhasil disimpan!");

    var nimmahasiswa = document.getElementById("nim").value;
    var namamahasiswa = document.getElementById("nama").value;
    sessionStorage.setItem("nimvalue", nim);
    sessionStorage.setItem("namavalue", nama);
}
