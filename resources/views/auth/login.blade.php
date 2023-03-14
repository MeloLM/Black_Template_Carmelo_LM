<x-layout>
    
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                
                <form action="{{route('login')}}" method="POST" class="text-white shadow p-3">
                    @csrf

                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show border-start border-end">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>


                    <button type="submit" class="btn btn-primary">Accedi</button>
                </form>
                
                
            </div>
        </div>
    </div>
    
    
</x-layout>