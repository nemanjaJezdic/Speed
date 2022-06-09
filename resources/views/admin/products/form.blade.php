<form action="@if($action == "products.update") {{ route($action, $product->id) }} @else {{ route($action) }} @endif" method="POST" enctype="multipart/form-data">

    @csrf
    @if($action == 'products.update')
        @method("PUT")
    @endif

    <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control" id="name" name="name" value="{{ $product->name ?? old('name') }}" />

        @error('name')
        <div class="text-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description" rows="5">{{ $product->description ?? old('description') }}</textarea>

        @error('description')
        <div class="text-danger">
            {{ $message }}
        </div>
        @enderror

    </div>

    <div class="form-group">
        <label for="price">Price</label>
        <input class="form-control" id="price" name="price" value="{{ $product->price ?? old('name') }}" />

        @error('price')
        <div class="text-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="gender">Active</label>
        <div class="radio">
            <input type="radio" name="is_active" id="active_yes" value="1" @if(isset($product) && $product->is_active == 1) checked @endif />  Yes
        </div>

        <div class="radio">
            <input type="radio" name="is_active" value="0" @if(isset($product) && $product->is_active == 0) checked @endif  />  No
        </div>

        @error('active')
        <div class="text-danger">
            {{ $message }}
        </div>
        @enderror

    </div>

    @php
        $image= ['Image', 'image'];

    @endphp
        <div class="form-group">
            <label for="image">{{ $image[0] }}</label>
            <input type="file" name="{{ $image[1] }}" id="{{ $image[1] }}" />

            @error($image[1])
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror

        </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>
