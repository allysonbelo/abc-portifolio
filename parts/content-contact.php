<div class="wrapper">
    <section id="contact" class="contact">
        <div class="contact__content">
            <h2 class="contact__content--title">Contact</h2>
            <p class="contact__content--text">
                I think i am a good humoured, very responsible, hard working and emotional person. I like creativity and appreciate this treit in others. I like creativity and appreciate this treit in others.
            </p>
            <div class="contact__info">
                <h3 class="contact__info--title">Address: </h3>
                <span class="contact__info--text">Av. Presidente Café Filho</span>
            </div>
            <div class="contact__info">
                <h3 class="contact__info--title">Phone: </h3>
                <span class="contact__info--text">+55 83 99822 9897</span>
            </div>
            <div class="contact__info">
                <h3 class="contact__info--title">E-mail: </h3>
                <span class="contact__info--text">allysonbelo@gmail.com</span>
            </div>
        </div>

        <div class="contact__form">
            <h2 class="contact__content--title">Contact Form</h2>
            <form method="post" class="contact__form--form" action="<?php echo get_template_directory_uri() . '/includes/contato.php'; ?>">
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name">

                <label for="phone">Telefone:</label>
                <input type="text" name="phone" id="phone">

                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email">

                <label for="message">Mensagem:</label>
                <textarea name="mensagem" id="mensagem"></textarea>
                <button type="submit" class="hero__content--button">Enviar</button>
            </form>
        </div>
    </section>
</div>