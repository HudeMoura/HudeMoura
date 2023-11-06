var elementosDuvida = document.querySelectorAll('.duvida')

elementosDuvida.forEach(function (duvida) { // Executar uma função para cada elemento duvida
    duvida.addEventListener('click', function() { // Adicionar para cada elemento um evento de click
        duvida.classList.toggle('ativa') // Se ele tiver a classe ativa ele vai remover, se não adicionar
    })
})