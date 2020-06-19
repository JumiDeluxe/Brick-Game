function zmiana_koloru_wyniki() {
	var kolor_obudowy = document.getElementById('kolor_obudowy').innerHTML;
	var kolor_przyciskow = document.getElementById('kolor_przyciskow').innerHTML;

	document.getElementById('panel_glowny').style.backgroundColor = kolor_obudowy;

	var kreski = document.getElementsByTagName('HR');
					for(var l = (kreski.length - 1); l >= 0; l--) {
						kreski[l].style.borderColor = kolor_przyciskow;
					}
					var header2 = document.getElementsByTagName('H2');
					for(var m = (header2.length - 1); m >= 0; m--) {
						header2[m].style.color = kolor_przyciskow;
					}
					var anch = document.getElementsByTagName('a');
					for(var a = (anch.length - 1); a >= 0; a--) {
						anch[a].style.color = kolor_przyciskow;
					}
}