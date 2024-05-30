@props(['text', 'class', 'link'])

<div class="button">
    <button class="{{$class}}">
        <a href="{{$link}}">{{$text}}</a>
    </button>
</div>