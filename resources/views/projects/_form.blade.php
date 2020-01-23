@csrf
		<input type="file" name="image"/><br>
		<img width="100" height="100" src="{{ Storage::url($project->image)}}"><br>
   		<input type="text" name="title" value="{{ old('title',$project->title) }}" placeholder="título"><br>
		<input type="text" name="url" value="{{ old('url',$project->url) }}" placeholder="url"><br>
		<textarea name="description" placeholder="Contenido">{{ old('description',$project->description) }}</textarea><br>
		<button>{{ $buttom }}</button>