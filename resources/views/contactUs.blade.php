<x-layout>
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h3 class="">Contattaci</h3>
                
                <form action="{{route('contact_submit')}}" method="POST" class="shadow p-4">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Completo</label>
                        <input type="name" class="form-control" id="name" name="name" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-info">Contatta</button>
                </form>
                
            </div>
        </div>
    </div>
    
    
    
    
</x-layout>