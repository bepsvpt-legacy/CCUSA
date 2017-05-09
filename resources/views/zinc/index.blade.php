@extends('layouts.master')

@section('fetch-info')
  <meta property="og:title" content="國立中正大學學生會會刊">
  <meta property="og:url" content="{{ route('zinc.index') }}">
  @foreach ($zincs as $zinc)
    <meta property="og:image" content="{{ asset($zinc->getRelation('media')->first()->getUrl()) }}">
  @endforeach
@endsection

@section('title')
  ZINE |
@endsection

@section('main')
  @if (Auth::check() && Auth::user()->hasRole(['zinc']))
    <div class="right-align">
      @include('components.internal-link', [
        'href' => route('zinc.manage.index'),
        'class' => 'btn waves-effect waves-light amber',
        'title' => '管理',
      ])

      @include('components.internal-link', [
        'href' => route('zinc.manage.analytics'),
        'class' => 'btn waves-effect waves-light light-blue',
        'title' => '流量',
      ])
    </div>
  @endif

  @forelse ($zincs->chunk(3) as $chunk)
    <div class="row">
      @if ($chunk->count() < 3)
        <div class="hide-on-med-and-down col l{{ 6 - $chunk->count() * 2 }}"><span>　</span></div>
      @endif

      @foreach ($chunk as $zinc)
        <div class="col s12 l4">
          <div class="card hoverable">
            <div class="card-image">
              <a
                href="{{ route('zinc.show', ['year' => $zinc->getAttribute('year'), 'month' => $zinc->getAttribute('month')]) }}"
                target="_blank"
              ><img src="{{ $zinc->getRelation('media')->first()->getUrl() }}"></a>
            </div>

            <div class="card-action flow-text">
              @include('components.external-link', [
                'href' => route('zinc.show', ['year' => $zinc->getAttribute('year'), 'month' => $zinc->getAttribute('month')]),
                'title' => $zinc->getAttribute('topic'),
              ])
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @empty
    @include('components.empty-data')
  @endforelse
@endsection
