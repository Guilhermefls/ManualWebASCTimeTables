document.getElementById('searchForm').addEventListener('click', function(event) {
    // Verificar se o clique ocorreu dentro do pseudo-elemento :before

    var target = event.target || event.srcElement;
    console.log('teste',target);
    if (event.target.nodeName === 'FORM') {
    // Submeter o formulário
        this.submit();
    }
});