document.addEventListener('DOMContentLoaded', function () {
    // Array de depoimentos
    const testimonials = [
        {
            text: "Estou muito satisfeito com o atendimento da ELi, otima profissional. Recomendo!",
            author: "Roberta Silva"
        },
        {
            text: "Estou amando o meu resultado e acompanhemento da Eli, esta sempre a disposição para ajudar nas duvidas!",
            author: "Maria Oliveira"
        }

    ];

    // Função para exibir depoimentos na página
    function displayTestimonials() {
        const testimonialContainer = document.getElementById('testimonialContainer');

        // Limpar conteúdo existente
        testimonialContainer.innerHTML = '';

        
        // Adicionar depoimentos dinamicamente
        testimonials.forEach(testimonial => {
            const testimonialDiv = document.createElement('div');
            testimonialDiv.classList.add('testimonial');

            const photo = document.createElement('img');
            photo.src = "imagens/imagem home.jpg"
            photo.alt = testimonial.author;

            // Adicionar estilos à imagem
            photo.style.width = '70px'; // Defina a largura desejada
            photo.style.height = '70px'; // Defina a altura desejada
            photo.style.borderRadius = '100%'; // Para criar uma borda arredondada


            const textParagraph = document.createElement('p');
            textParagraph.textContent = testimonial.text;

            const authorParagraph = document.createElement('p');
            authorParagraph.classList.add('testimonial-author');
            authorParagraph.textContent = `- ${testimonial.author}`;

            testimonialDiv.appendChild(photo);
            testimonialDiv.appendChild(textParagraph);
            testimonialDiv.appendChild(authorParagraph);

            testimonialContainer.appendChild(testimonialDiv);
        });
    }

    // Chamar a função para exibir depoimentos ao carregar a página
    displayTestimonials();
});
