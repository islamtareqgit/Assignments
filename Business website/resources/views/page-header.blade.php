<!-- Page Header -->
<div class="page-header">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title">Welcome {{ Auth::user()-> name}}</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item active">@yield('page-name')</li>
            </ul>
        </div>
    </div>
</div>
<!-- /Page Header -->