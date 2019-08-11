
<form method="post" action="/envoi_message/{{$user->id}}">
    @csrf

<textarea name="message">votre message</textarea>
    <input type="submit" value="Envoyer">
</form>
