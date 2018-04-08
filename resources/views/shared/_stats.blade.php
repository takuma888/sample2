<div class="stats">
    <a href="{{route('users.followings', $user->id)}}"><strong class="stat">{{count($user->followings)}}</strong>关注</a>
    <a href="{{route('users.followers', $user->id)}}"><strong class="stat">{{count($user->followers)}}</strong>粉丝</a>
    <a href="{{route('users.show', $user->id)}}"><strong class="stat">{{count($user->statuses)}}</strong>微博</a>
</div>