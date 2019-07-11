<div class="form-group {{$errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label sr-only" >Tire</label>
    <input type="text" id="title" name="title" placeholder="Titre de l'evenement" value="{{ old('title') ?: $event->title}}" class="form-control">
    {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{$errors->has('adresse') ? 'has-error' : ''}}">
        <label for="adresse" class="control-label sr-only" >Adresse</label>
        <input type="text" id="adresse" name="adresse" placeholder="Adresse de l'evenement" value="{{ old('adresse') ?: $event->adresse}}" class="form-control">
        {!! $errors->first('adresse', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{$errors->has('price') ? 'has-error' : ''}}">
        <label for="price" class="control-label sr-only" >Price</label>
        <input type="text" id="price" name="price" placeholder="Prix de l'evenement" value="{{ old('price') ?: $event->price}}" class="form-control">
        {!! $errors->first('price', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{$errors->has('start_at') ? 'has-error' : ''}}">
        <label for="start_at" class="control-label sr-only" >Date</label>
        <input type="datetime-local" id="start_at" name="start_at" placeholder="Date de l'evenement" value="{{ old('start_at')}}" class="form-control">
        {!! $errors->first('start_at', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{$errors->has('description') ? 'has-error' : ''}}">
        <label for="description" class="control-label sr-only" >Description</label>
        <textarea name="description" id="description" cols="30" rows="5" placeholder="Description de l'evenement" class="form-control">{{ old('description') ?: $event->description}}</textarea>
        {!! $errors->first('description', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group">
    <input type="submit" value="{{$SubmitButon}}" class="btn btn-primary btn-block">
</div>