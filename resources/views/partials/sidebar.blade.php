
<div class="sidebar">
    <div class="logo-details">
        <img class="logo_name" src="../assets/images/election ui logo 2.png"></i>
        <i class='material-icons' id="btn">menu</i>
    </div>
    <ul id="navv" class="nav-list hide">
        <!-- <li class="list-item">
            <input class="text-white" type="text" placeholder="Search...">
        </li> -->
        <li data-target="all" class="list-item active">
            <a href="{{route('preview')}}">
                <span class="links_name">Home View</span>
            </a>
        </li>

        @foreach($categories as $category)
        <li  class="list-item">
            <a href="{{route('preview.category', $category->id)}}">
                <span class="links_name">  {{$category->name}}</span>
            </a>
        </li>
      
        @endforeach

        
        <li data-target="leave" class="profile">
            <div class="profile-details">
                <!-- <img src="" alt=""> -->
                <div class="name_job">
                    <div class="name"></div>
                    <div class="job"></div>
                </div>
            </div>
            <!-- <i class='bx bx-log-out' id="log_out"></i> -->
        </li>
    </ul>
</div>