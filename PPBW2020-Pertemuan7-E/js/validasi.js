function valid(){
    var nama = document.getElementById("nama_mahasiswa").value;
    var nim = document.getElementById("nim").value;
    if(nama !="" && nim !=""){
        return true;
    }else{
        alert('Anda Harus Mengisi Data Dengan Lengkap');
        return false;
    }
}

function reset(){
    document.getElementById("form").reset();
}