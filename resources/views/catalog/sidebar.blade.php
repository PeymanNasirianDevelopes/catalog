





<nav class="nav flex-column side-nav">
    <a class="nav-link @if(Request::url() === url("catalog/profile")) active @endif icon" @if(Request::url() === url("catalog/profile")) href="#"  @else href="{{url("catalog/profile")}}"@endif>
        <i class="fa fa-user"></i>My Profile
    </a>
    <a class="nav-link @if(Request::url() === url("catalog/ads_list")) active @endif  icon"  @if(Request::url() === url("catalog/ads_list")) href="#" @else  href="{{url("catalog/ads_list")}}"@endif>
        <i class="fa fa-heart"></i>My Ads Listing
    </a>
    <a class="nav-link @if(Request::url() === url("catalog/bookmarks")) active @endif  icon" @if(Request::url() === url("catalog/bookmarks")) href="#" @else  href="{{url("catalog/bookmarks")}}"@endif>
        <i class="fa fa-star"></i>Bookmarks
    </a>
    <a class="nav-link @if(Request::url() === url("catalog/change_password")) active @endif  icon"  @if(Request::url() === url("catalog/change_password")) href="#" @else  href="{{url("catalog/change_password")}}"@endif>
        <i class="fa fa-recycle"></i>Change Password
    </a>
    <a class="nav-link @if(Request::url() === url("catalog/sold")) active @endif  icon" @if(Request::url() === url("catalog/sold")) href="#" @else  href="{{url("catalog/sold")}}"@endif>
        <i class="fa fa-check"></i>Sold Items
    </a>
</nav>
