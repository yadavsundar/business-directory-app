<div class="row user-admin">
    <div class="btn-group btn-group-justified">
        <div class="btn-group">
            <button type="button" class="btn btn-nav">
                <span class="glyphicon glyphicon-folder-close"></span>
                <p>Overview</p>
            </button>
        </div>
        <div class="btn-group">
        <a href="{{ route('user.listing.create') }}">
            <button type="button" class="btn btn-nav">
                <span class="glyphicon glyphicon-calendar"></span>
                <p>Listing</p>
            </button>
        </a>    
        </div>
        <div class="btn-group">
        <a href="{{ route('user.products.index') }}">
            <button type="button" class="btn btn-nav">
                <span class="glyphicon glyphicon-globe"></span>
                <p>Products</p>
            </button>
        </a>    
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-nav">
                <span class="glyphicon glyphicon-leaf"></span>
                <p>Photos</p>
            </button>
        </div>
        <div class="btn-group">
        <a href="{{ route('user.employee.index') }}">
            <button type="button" class="btn btn-nav">
                <span class="glyphicon glyphicon-time"></span>
                <p>Employees</p>
            </button>
        </a>    
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-nav">
                <span class="glyphicon glyphicon-bell"></span>
                <p>Reviews</p>
            </button>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-nav">
                <span class="glyphicon glyphicon-bell"></span>
                <p>Accounts</p>
            </button>
        </div> 

    </div>
</div>