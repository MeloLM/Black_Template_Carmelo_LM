<x-layout>
    
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                
                <form action="{{route('register')}}" method="POST" class="text-white shadow p-3">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name Surname:</label>
                        <input type="name" class="form-control" name="name" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Conferma Password:</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password">
                    </div>

                    <button type="submit" class="btn btn-primary">Registrati</button>
                </form>
                
                
            </div>
        </div>
    </div>
    
    
</x-layout>