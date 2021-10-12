function validateForm() {
    if (document.forms["formPendaftaran"]["nama"].value == "") {
        alert("Nama tidak boleh kosong");
        document.forms["formPendaftaran"]["nama"].focus();
        return false;
    }
    if (document.forms["formPendaftaran"]["nrp"].value == "") {
        alert("NRP tidak boleh kosong");
        document.forms["formPendaftaran"]["nrp"].focus();
        return false;
    }
    if (document.forms["formPendaftaran"]["email"].value == "") {
        alert("Email tidak boleh kosong");
        document.forms["formPendaftaran"]["email"].focus();
        return false;
    }
    if (document.getElementById("departemen").value == "0") {
        alert("Pilih Departemen");
        document.forms["formPendaftaran"]["departemen"].focus();
        return false;
    }
    if (!this.formPendaftaran.vaksin1.checked) {
        if (!this.formPendaftaran.vaksin2.checked) {
            alert("Harap mengisi status vaksinasi");
            document.forms["formPendaftaran"]["vaksin1"].focus();
            document.forms["formPendaftaran"]["vaksin2"].focus();
            return false;
        }
    }
}
