<section>
<form method="POST">
    @csrf
    <input type="text" name="nom" placeholder="Votre nom">
    <input type="email" name="email" placeholder="Votre email">
    <textarea name="message" placeholder="Votre message"></textarea>
    <button type="submit">Envoyer</button>
</form>
</section>