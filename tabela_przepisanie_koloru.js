function tabela_przepisanie_koloru() {
    var tabela = document.getElementsByClassName('tab_k');
    var kolor;
    for (var a = (tabela.length - 1); a >= 0; a--) {
        kolor = tabela.innerHTML;
        tabela.style.backgroundColor = kolor;
        kolor='';
    }
}