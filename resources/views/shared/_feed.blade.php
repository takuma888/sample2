@if (count($feed_items)>0)
<ol class="statuses">
@foreach ($feed_items as $status)
@include('statuses._status')
@endforeach
{!! $feed_items->render() !!}
</ol>
@endif