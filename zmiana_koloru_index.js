function zmiana_koloru_index() {
                    var kolor_obudowy = document.getElementById('kolor_obudowy').innerHTML;
                    var kolor_przyciskow = document.getElementById('kolor_przyciskow').innerHTML;
                    var kolor_ramki = document.getElementById('kolor_ramki').innerHTML;
                    var kolor_kwadratow = document.getElementById('kolor_kwadratow').innerHTML;
                    var kolor_super = document.getElementById('kolor_super').innerHTML;
                    var kolor_kreski = document.getElementById('kolor_kreski').innerHTML;
                    var kolor_brick_game = document.getElementById('kolor_brick_game').innerHTML;
                    var kolor_autora = document.getElementById('kolor_autora').innerHTML;

                    document.getElementById('obudowa').style.backgroundColor = kolor_obudowy;
                    document.getElementById('panel_prawy_glowny').style.backgroundColor = kolor_obudowy;
                    document.getElementById('panel_lewy_glowny').style.backgroundColor = kolor_obudowy;
                    
                    
                    document.getElementById('autor').style.backgroundColor = kolor_obudowy;
                    document.getElementById('super').style.backgroundColor = kolor_obudowy;
                    document.getElementById('autor').style.color = kolor_autora;
                    document.getElementById('super').style.color = kolor_super;
                    
                    var przycisk_m = document.getElementsByClassName("przycisk_maly");
                    for(var i = (przycisk_m.length - 1); i >= 0; i--)
                    {
                        przycisk_m[i].style.backgroundColor = kolor_przyciskow;
                    }
                    var przycisk_s = document.getElementsByClassName("przycisk_sterowania");
                    for(var j = (przycisk_s.length - 1); j >= 0; j--)
                    {
                        przycisk_s[j].style.backgroundColor = kolor_przyciskow;
                    }
                    document.getElementById('przycisk_glowny').style.backgroundColor = kolor_przyciskow
                    document.getElementById('brick_game_napis').style.color = kolor_brick_game;
                    document.getElementById('linia_konsolka').style.border = "4px solid "+kolor_kreski;
                    document.getElementById('ramka').style.border = "3px solid "+kolor_ramki;
                    var kwadraty = document.getElementsByClassName("kwpelny");
                    for(var k = (kwadraty.length - 1); k >= 0; k--)
                    {
                        kwadraty[k].style.backgroundColor = kolor_kwadratow;
                    }
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