@forelse ($customer as $item => $value)
@if($item != 'id')
    <div class="col-sm-6">
            @if($item == 'signature' || $item == 'id_card_image' || $item == 'profile_picture')
                <img src="{{asset($value)}}" style="width: 50%; height:50%; display:block; margin-bottom:10px;"/>
                <a class="btn btn-primary text-white" href="{{ url('download/file?filepath='.urlencode($value)) }}"> Download File </a>
            @else
            @php $label = str_replace('_',' ', $item) @endphp
                {!! Form::label('', Str::upper($label)) !!}
                <p>{{ str_replace('_',' ',Str::ucfirst($value)) }}</p>
            @endif
    </div>
@endif
@empty
    
@endforelse