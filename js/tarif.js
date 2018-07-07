function ajaxTarif(){
	var prop = document.getElementById('kota').value;
	var quantity = <?php echo ($val);?>;
	// var q = document.getElementById('quantitas').value;
	//yogyakarta

	if (prop=='02&prop=34') {
		var tarif=12000*q;
	}
	else if (prop=='03&prop=34') {
		var tarif=21000;
	}
	else if (prop=='01&prop=34') {
		var tarif=12000;
	}
	else if (prop=='04&prop=34') {
		var tarif=8000;
	}
	else
		//terakhir cuk
	{
		var tarif=8000;
	}
	document.getElementById('tarif').value=tarif;
	document.getElementById('ongkir').value=tarif;
		alert(quantity);
}
