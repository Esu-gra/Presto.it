<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form wire:submit.prevent="store">
                    <div class="mb-3">
                        <label for="exampleName" class="form-label">{{__("ui.Nome")}}</label>
                        <input wire:model="name" placeholder="{{__("ui.Scrivi")}}" type="text" class="form-control" id="exampleName" aria-describedby="nameHelp">
                        @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="examplePrice" class="form-label">{{__("ui.Prezzo")}}</label>
                        <input wire:model="price" placeholder="{{__("ui.Scrivi")}}" type="number" class="form-control" id="exampleInputPrice">
                        @error('price') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleDescription" class="form-label">{{__("ui.Descrizione")}}</label>
                        <textarea class="form-control" placeholder="{{__("ui.Scrivi")}}" type="text" id="exampleFormControlTextarea1" rows="3" wire:model="description"></textarea>
                        @error('description') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputCategory" class="form-label">{{__("ui.Categoria")}}</label>
                        <select id="inputCategory" class="form-control" wire:model="category_id">
                            <option value="">{{__("ui.Seleziona una categoria")}}</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <input wire:model="temporary_images" type="file" name="images" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="image"/>
                        @error('temporary_images.*')
                            <p class="text-danger mt-2">{{$message}}</p>
                        @enderror
                    </div>
                    @if(!empty($images))
                        <div class="row">
                            <div class="col-12">
                                <p>Anteprima:</p>
                                <div class="row border border-4 border-info rounded shadow py-4">
                                    @foreach ($images as $key=>$image)
                                    <div class="col my-3">
                                        <div id="createPrev" class="img-preview mx-auto shadow" style="background-image: url({{$image->temporaryUrl()}})"></div>
                                        <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">Cancella</button>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                    <button type="submit" class="btn btn-primary">{{__("ui.Invia")}}</button>
                </form>
            </div>
        </div>
    </div>
    
</div>

