function tambah(){
    var bilangan1 = parseInt(document.getElementById("bil1").value);
    var bilangan2 = parseInt(document.getElementById("bil2").value); //method yang mengembalikan value
    var hasilnya = document.getElementById("hasil"); //returnnya object

    hasilnya.innerHTML = bilangan1 + bilangan2;
}

function kali(){
    var bilangan1 = parseInt(document.getElementById("bil1").value);
    var bilangan2 = parseInt(document.getElementById("bil2").value); //method yang mengembalikan value
    var hasilnya = document.getElementById("hasil"); //returnnya object
    
    hasilnya.innerHTML = bilangan1 * bilangan2;
}