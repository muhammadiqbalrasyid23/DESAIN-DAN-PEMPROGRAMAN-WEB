function tampil(){
	alert("Hallo");
}

// let warna = document.getElementById('warna');

// warna.addEventLisetener('change', (event) =>{
// 	document.body.style.backgroundColor = warna.value;
// });

let x = window.prompt("Masukkan Nama Anda");
alert('Halo ' + x);

let warna = document.getElementById('warna');
warna.addEventLisetener('change', (event) =>{
	document.body.style.backgroundColor = warna.value;
});
