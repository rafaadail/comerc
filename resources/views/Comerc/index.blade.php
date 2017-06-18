@extends('base')
@section('content')

    <div class="col-lg-12 col-md-12 col-sm-12 text-green">
        <h3>Notícias {{ $feedTitle }}</h3>
    </div>
    @foreach($feeds->channel->item as $feed)
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h4>
                <a href="{{ $feed->link }}">
                    <span>{{ $feed->title }}</span>
                </a>
            </h4>
            <p>
                <small class="text-muted"><i class="fa fa-calendar" aria-hidden="true"></i> {{ date('d/m/Y', strtotime($feed->pubDate)) }}</small>
            </p>
            <p>
                {!! $feed->description !!}
            </p>
            <p>
                <a href="{{ $feed->link }}">Leia Mais...</a>
            </p>
        </div>
    @endforeach
@endsection