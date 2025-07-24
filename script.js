document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('service-form');

    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Impede envio padrão

        const title = document.getElementById('title').value.trim();
        const description = document.getElementById('description').value.trim();
        const category = document.getElementById('category').value;
        const contact = document.getElementById('contact').value.trim();

        if (!title || !description || !category || !contact) {
            alert('Por favor, preencha todos os campos.');
            return;
        }

        const anuncio = {
            title,
            description,
            category,
            contact,
            date: new Date().toISOString()
        };

        const anuncios = JSON.parse(localStorage.getItem('anuncios')) || [];
        anuncios.push(anuncio);
        localStorage.setItem('anuncios', JSON.stringify(anuncios));

        // Redireciona para a página onde os anúncios são exibidos
        window.location.href = 'painel.html';
    });
});
