<head>
  
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      </head>
      



<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample User details</h2>
    <table class="table table-striped">
        <thead>
            
        </thead>
        <tbody>


                <div class="row">

            @foreach($details as $user)
              
        
        
     <div class="col-sm-5 my-3">  
        <div class="card" style="width:400px">
          <img class="card-img-top" src="/storage/cover_images/{{$user->cover_image}}" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">{{$user->title}}</h4>
            <h4 class="card-title">{{$user->location}}</h4>

            <p class="card-text">POSTED ON:{{$user->created_at}}</p>
            <a href="/posts/{{$user->id}}" class="btn btn-primary">Check Out</a>
          </div>
        </div>
        
      </div>
    
    
            @endforeach
    </div>
        </tbody>
    </table>
    @endif
  </div>
  