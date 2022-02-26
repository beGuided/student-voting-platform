<style>
    .huge{
        font-size: 35px;
        font-weight: 500;
    }
</style>
    <div class="row m-3">
        <div class="col-lg-3 col-md-6 ">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-file-text fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                      <div class='huge'>{{$candidates->count()}}</div>
                            <div>candidates</div>
                        </div>
                    </div>
                </div>
                <a href="{{route('candidates.index')}}">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="ml-5"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-comments fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                         <div class='huge'>{{$votes->count()}}</div>
                          <div>votes</div>
                        </div>
                    </div>
                </div>
                <a href="{{route('votes.index')}}">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="ml-5"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                        <div class='huge'>{{$users->count()}}</div>
                            <div> Users</div>
                        </div>
                    </div>
                </div>
                <a href="{{route('platform-users.index')}}">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="ml-5"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-list fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class='huge'>{{$categories->count()}}</div>
                             <div>Categories</div>
                        </div>
                    </div>
                </div>
                <a href="{{route('categories.index')}}">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="ml-5"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
                    <!-- /.row -->