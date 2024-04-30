document.getElementById('searchForm').addEventListener('click', function(event) {
    // Verificar se o clique ocorreu dentro do pseudo-elemento :before
    var target = event.target || event.srcElement;
    if (target.getAttribute('id') === 'searchForm' && event.offsetX > 0 && event.offsetX < 40 && event.offsetY > 0 && event.offsetY < 40) {
        // Submeter o formulário
        this.submit();
    }
});