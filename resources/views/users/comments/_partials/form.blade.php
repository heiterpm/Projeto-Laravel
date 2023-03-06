@csrf
<div>
<textarea name="body" id="body" placeholder="Nome:" value="{{$user -> name ?? old('name')}}"> </textarea>
</div>
<label for="visible">
    <input type="checkbox" name="visible" id="" />
    Visivel?
</label>
<button type="submit">Enviar</button>