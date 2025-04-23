@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Blog</h2>

    <form method="post" action="{{ env('APP_URL') }}/console/blog/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input type="title" name="title" id="title" value="{{old('title')}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="url">URL:</label>
            <input type="url" name="url" id="url" value="{{old('url')}}">

            @if ($errors->first('url'))
                <br>
                <span class="w3-text-red">{{$errors->first('url')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="slug">Slug:</label>
            <input type="text" name="slug" id="slug" value="{{old('slug')}}" required>

            @if ($errors->first('slug'))
                <br>
                <span class="w3-text-red">{{$errors->first('slug')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="content">Content:</label>
            <textarea name="content" id="content" required>{{old('content')}}</textarea>

            @if ($errors->first('content'))
                <br>
                <span class="w3-text-red">{{$errors->first('content')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="status">Status:</label>
            <textarea name="status" id="status" required>{{old('status')}}</textarea>

            @if ($errors->first('status'))
                <br>
                <span class="w3-text-red">{{$errors->first('status')}}</span>
            @endif
        </div>

       

        <button type="submit" class="w3-button w3-green">Add Blog</button>

    </form>

    <a href="{{ env('APP_URL') }}/console/blog/list">Back to Blog List</a>

</section>

@endsection