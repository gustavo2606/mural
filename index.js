// Verifica se o elemento 'service-list' existe na página
const container = document.getElementById('service-list');


if (container) {
  const anuncios = JSON.parse(localStorage.getItem('anuncios')) || [];

  if (anuncios.length === 0) {
    container.innerHTML = '<p>Nenhum anúncio publicado ainda.</p>';
  } else {
    anuncios.forEach(anuncio => {
      const div = document.createElement('div');
      div.classList.add('anuncio');

      div.innerHTML = `
        <h3>${anuncio.title}</h3>
        <div class="categoria">Categoria: ${anuncio.category}</div>
        <div class="data">Publicado em: ${new Date(anuncio.date).toLocaleString('pt-BR')}</div>
        <p>${anuncio.description}</p>
        <div class="contato">Contato: ${anuncio.contact}</div>
      `;

      container.appendChild(div);
    });
    
  }
  
}
