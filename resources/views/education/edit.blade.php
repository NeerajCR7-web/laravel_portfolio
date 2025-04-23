@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Education</h2>

    <form method="post" action="{{ env('APP_URL') }}/console/education/edit/{{$education->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="degree">Degree:</label>
            <input type="degree" name="degree" id="degree" value="{{old('degree', $education->degree)}}" required>
            
            @if ($errors->first('degree'))
                <br>
                <span class="w3-text-red">{{$errors->first('degree')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="university">University:</label>
            <input type="university" name="university" id="university" value="{{old('university', $education->university)}}">

            @if ($errors->first('university'))
                <br>
                <span class="w3-text-red">{{$errors->first('university')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="year">Year:</label>
            <input type="year" name="year" id="year" value="{{old('year', $education->year)}}">

            @if ($errors->first('year'))
                <br>
                <span class="w3-text-red">{{$errors->first('year')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Edit education</button>

    </form>

    <a href="{{ env('APP_URL') }}/console/education/list">Back to education List</a>

</section>

@endsection